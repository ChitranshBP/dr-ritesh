<?php
require 'blog/how-much-does-tms-cost-with-insurance.php';
$count = preg_match_all('/<span class="post-faq-question">(.*?)<\/span>.*?<div class="post-faq-answer">\s*<p>(.*?)<\/p>/s', $content, $matches);
echo "Count: $count\n";
if ($count > 0) {
    var_dump($matches[1]);
} else {
    echo "No matches found. Content length: " . strlen($content) . "\n";
    echo substr($content, strpos($content, '<span class="post-faq-question">'), 500);
}
