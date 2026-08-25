<?php

$ROOT_DIR = __DIR__;

$KEYWORD_MAPPING = [
    "tms for treatment resistant depression" => "/psychiatry/tms-for-treatment-resistant-depression.php",
    "tms for major depression" => "/psychiatry/tms-for-major-depression.php",
    "tms for brain injury" => "/neurology/tms-for-brain-injury-trauma.php",
    "tms for alzheimer's" => "/neurology/tms-for-alzheimers-dementia.php",
    "tms for dementia" => "/neurology/tms-for-alzheimers-dementia.php",
    "tms for fibromuscular dysplasia" => "/neurology/tms-for-fibromuscular-dysplasia.php",
    "tms for fibromyalgia" => "/neurology/tms-for-fibromyalgia.php",
    "tms for huntington's disease" => "/neurology/tms-for-huntingtons-disease.php",
    "tms for huntingtons disease" => "/neurology/tms-for-huntingtons-disease.php",
    "tms for movement disorders" => "/neurology/tms-for-movement-disorders.php",
    "tms for neuropathic pain" => "/neurology/tms-for-neuropathic-pain.php",
    "tms for parkinson's" => "/neurology/tms-for-parkinsons-symptoms.php",
    "tms for stroke recovery" => "/neurology/tms-for-stroke-recovery.php",
    "tms for migraine" => "/neurology/tms-for-migraine.php",
    "tms for bipolar depression" => "/psychiatry/tms-for-bipolar-depression.php",
    "tms for generalized anxiety" => "/psychiatry/tms-for-generalized-anxiety.php",
    "tms for panic disorder" => "/psychiatry/tms-for-panic-disorder.php",
    "tms for depression" => "/tms-for-depression.php",
    "tms for adhd" => "/psychiatry/tms-for-adhd.php",
    "tms for ptsd" => "/psychiatry/tms-for-ptsd.php",
    "tms for ocd" => "/psychiatry/tms-for-ocd.php",
    "ketamine therapy" => "/what-is-ketamine-therapy.php",
    "spravato" => "/what-is-spravato.php",
    "nad+" => "/nad-plus.php",
    "medical management" => "/medical-management.php",
    "dr. ritesh amin" => "/dr-ritesh-amin.php",
    "dr. nalin ranasinghe" => "/dr-nalin-ranasinghe.php",
    "tms therapy cost" => "/blog/how-much-does-tms-cost-with-insurance.php",
    "tms cost" => "/blog/how-much-does-tms-cost-with-insurance.php",
    "tms therapy candidate" => "/blog/who-is-a-good-candidate-for-tms-therapy.php",
    "tms candidate" => "/blog/who-is-a-good-candidate-for-tms-therapy.php",
    "tms legitimate" => "/blog/is-tms-legitimate.php",
    "tms anxiety" => "/blog/does-tms-help-with-anxiety.php",
    "ocd age" => "/blog/can-ocd-get-worse-with-age.php"
];

$MAX_LINKS_PER_KEYWORD = 50;

function process_html_content($html_content, $current_url) {
    global $KEYWORD_MAPPING, $MAX_LINKS_PER_KEYWORD;
    
    preg_match_all('/(<[^>]+>)|([^<]+)/s', $html_content, $matches, PREG_SET_ORDER);
    
    $in_a_tag = false;
    $in_heading_tag = false;
    
    $linked_keywords_count = array_fill_keys(array_keys($KEYWORD_MAPPING), 0);
    
    $new_html = "";
    
    foreach ($matches as $match) {
        if (!empty($match[1])) {
            $tag = $match[1];
            
            if (preg_match('/^<a\b/i', $tag)) {
                $in_a_tag = true;
            } elseif (preg_match('/^<\/a\b/i', $tag)) {
                $in_a_tag = false;
            }
            
            if (preg_match('/^<h[1-6]\b/i', $tag)) {
                $in_heading_tag = true;
            } elseif (preg_match('/^<\/h[1-6]\b/i', $tag)) {
                $in_heading_tag = false;
            }
            
            $new_html .= $tag;
        } elseif (!empty($match[2])) {
            $text = $match[2];
            
            if (!$in_a_tag && !$in_heading_tag) {
                foreach ($KEYWORD_MAPPING as $keyword => $target_url) {
                    if (str_ends_with($target_url, $current_url) || str_ends_with($current_url, $target_url)) {
                        continue;
                    }
                    
                    if ($linked_keywords_count[$keyword] >= $MAX_LINKS_PER_KEYWORD) {
                        continue;
                    }
                    
                    $pattern = '/\b(' . preg_quote($keyword, '/') . ')\b/i';
                    
                    if (preg_match($pattern, $text, $kw_match)) {
                        $original_text = $kw_match[1];
                        $replacement = '<a href="' . $target_url . '">' . $original_text . '</a>';
                        $text = preg_replace($pattern, $replacement, $text, 1);
                        $linked_keywords_count[$keyword]++;
                    }
                }
            }
            $new_html .= $text;
        }
    }
    
    return $new_html;
}

function rsearch($folder, $pattern) {
    $dir = new RecursiveDirectoryIterator($folder);
    $ite = new RecursiveIteratorIterator($dir);
    $files = new RegexIterator($ite, $pattern, RegexIterator::GET_MATCH);
    $fileList = array();
    foreach($files as $file) {
        $fileList = array_merge($fileList, $file);
    }
    return $fileList;
}

function main() {
    global $ROOT_DIR;
    $php_files = rsearch($ROOT_DIR, '/^.+\.php$/i');
    
    $total_files = count($php_files);
    $modified_files = 0;
    
    foreach ($php_files as $file_path) {
        if (strpos($file_path, "apply_internal_links.php") !== false) {
            continue;
        }
        
        $rel_path = str_replace("\\", "/", str_replace($ROOT_DIR . "\\", "", $file_path));
        $current_url = "/" . $rel_path;
        if ($current_url == "/index.php") {
            $current_url = "/";
        }
        
        $content = file_get_contents($file_path);
        
        $new_content = process_html_content($content, $current_url);
        
        if ($new_content !== $content) {
            file_put_contents($file_path, $new_content);
            $modified_files++;
            echo "Modified: $file_path\n";
        }
    }
    
    echo "Done. Modified $modified_files out of $total_files files.\n";
}

main();
?>
