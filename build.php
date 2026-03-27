<?php
/**
 * Build Script: Compiles PHP pages into static HTML for Netlify deployment.
 * 
 * Usage: php build.php
 * 
 * This script:
 * 1. Creates a /dist output directory
 * 2. Renders each page-level PHP file into static HTML
 * 3. Copies static assets (css/, js/, assets/) into /dist
 */

$outputDir = __DIR__ . '/dist';

// ── Page-level PHP files to compile ──
// (Excludes partials like header.php, footer.php, service-template.php)
$pages = [
    'index.php'                   => 'index.html',
    'index2.php'                  => 'index2.html',
    'dr-ritesh-amin.php'          => 'dr-ritesh-amin.html',
    'contact.php'                 => 'contact.html',
    'neurology-tms-therapy.php'   => 'neurology-tms-therapy.html',
    'psychiatry-tms-therapy.php'  => 'psychiatry-tms-therapy.html',
    'tms-for-depression.php'      => 'tms-for-depression.html',
    'what-is-ketamine-therapy.php'=> 'what-is-ketamine-therapy.html',
    'what-is-spravato.php'        => 'what-is-spravato.html',
    'faq.php'                      => 'faq.html',
    'insurance.php'                => 'insurance.html',
    'privacy-policy.php'           => 'privacy-policy.html',
    'reviews.php'                  => 'reviews.html',
    'terms.php'                    => 'terms.html',

    // Neurology sub-pages
    'neurology/tms-for-alzheimers-dementia.php'    => 'neurology/tms-for-alzheimers-dementia.html',
    'neurology/tms-for-brain-injury-trauma.php'    => 'neurology/tms-for-brain-injury-trauma.html',
    'neurology/tms-for-fibromyalgia.php'           => 'neurology/tms-for-fibromyalgia.html',
    'neurology/tms-for-fibromuscular-dysplasia.php'=> 'neurology/tms-for-fibromuscular-dysplasia.html',
    'neurology/tms-for-huntingtons-disease.php'    => 'neurology/tms-for-huntingtons-disease.html',
    'neurology/tms-for-migraine.php'               => 'neurology/tms-for-migraine.html',
    'neurology/tms-for-movement-disorders.php'     => 'neurology/tms-for-movement-disorders.html',
    'neurology/tms-for-neuropathic-pain.php'       => 'neurology/tms-for-neuropathic-pain.html',
    'neurology/tms-for-parkinsons-symptoms.php'    => 'neurology/tms-for-parkinsons-symptoms.html',
    'neurology/tms-for-stroke-recovery.php'        => 'neurology/tms-for-stroke-recovery.html',

    // Psychiatry sub-pages
    'psychiatry/tms-for-adhd.php'                         => 'psychiatry/tms-for-adhd.html',
    'psychiatry/tms-for-bipolar-depression.php'           => 'psychiatry/tms-for-bipolar-depression.html',
    'psychiatry/tms-for-generalized-anxiety.php'          => 'psychiatry/tms-for-generalized-anxiety.html',
    'psychiatry/tms-for-major-depression.php'             => 'psychiatry/tms-for-major-depression.html',
    'psychiatry/tms-for-ocd.php'                          => 'psychiatry/tms-for-ocd.html',
    'psychiatry/tms-for-panic-disorder.php'               => 'psychiatry/tms-for-panic-disorder.html',
    'psychiatry/tms-for-ptsd.php'                         => 'psychiatry/tms-for-ptsd.html',
    'psychiatry/tms-for-treatment-resistant-depression.php' => 'psychiatry/tms-for-treatment-resistant-depression.html',
];

// ── Static asset directories to copy ──
$assetDirs = ['css', 'js', 'assets'];

// ── Helper: recursively copy a directory ──
function copyDir($src, $dst) {
    if (!is_dir($src)) return;
    if (!is_dir($dst)) mkdir($dst, 0755, true);
    $dir = opendir($src);
    while (($file = readdir($dir)) !== false) {
        if ($file === '.' || $file === '..') continue;
        $srcPath = $src . '/' . $file;
        $dstPath = $dst . '/' . $file;
        if (is_dir($srcPath)) {
            copyDir($srcPath, $dstPath);
        } else {
            copy($srcPath, $dstPath);
        }
    }
    closedir($dir);
}

// ── Helper: recursively delete a directory ──
function deleteDir($dir) {
    if (!is_dir($dir)) return;
    $items = array_diff(scandir($dir), ['.', '..']);
    foreach ($items as $item) {
        $path = $dir . '/' . $item;
        is_dir($path) ? deleteDir($path) : unlink($path);
    }
    rmdir($dir);
}

// ── Helper: render a PHP file to HTML string using output buffering ──
function renderPage($phpFile) {
    ob_start();
    // Change to the source directory so include paths resolve correctly
    $originalDir = getcwd();
    chdir(dirname($phpFile));
    include $phpFile;
    chdir($originalDir);
    return ob_get_clean();
}

echo "=== Dr. Ritesh Amin — Static Build ===\n\n";

// Step 1: Clean & create output directory
echo "[1/3] Preparing output directory...\n";
if (is_dir($outputDir)) {
    deleteDir($outputDir);
}
mkdir($outputDir, 0755, true);
echo "      ✓ dist/ ready\n\n";

// Step 2: Compile PHP pages to HTML
echo "[2/3] Compiling PHP pages to HTML...\n";
$compiled = 0;
$errors = 0;
foreach ($pages as $phpFile => $htmlFile) {
    $srcPath = __DIR__ . '/' . $phpFile;
    $dstPath = $outputDir . '/' . $htmlFile;

    // Ensure the output subdirectory exists (e.g. dist/neurology/, dist/psychiatry/)
    $dstDirPath = dirname($dstPath);
    if (!is_dir($dstDirPath)) {
        mkdir($dstDirPath, 0755, true);
    }

    if (!file_exists($srcPath)) {
        echo "      ✗ SKIP: {$phpFile} (not found)\n";
        $errors++;
        continue;
    }

    try {
        $html = renderPage($srcPath);

        // Fix internal .php links to .html for the static build
        $html = str_replace('.php"', '.html"', $html);
        $html = str_replace(".php'", ".html'", $html);

        file_put_contents($dstPath, $html);
        $size = round(strlen($html) / 1024, 1);
        echo "      ✓ {$phpFile} → {$htmlFile} ({$size} KB)\n";
        $compiled++;
    } catch (Exception $e) {
        echo "      ✗ ERROR: {$phpFile} — " . $e->getMessage() . "\n";
        $errors++;
    }
}
echo "\n";

// Step 3: Copy static assets
echo "[3/3] Copying static assets...\n";
foreach ($assetDirs as $dir) {
    $srcDir = __DIR__ . '/' . $dir;
    $dstDir = $outputDir . '/' . $dir;
    if (is_dir($srcDir)) {
        copyDir($srcDir, $dstDir);
        echo "      ✓ {$dir}/\n";
    } else {
        echo "      - {$dir}/ (not found, skipped)\n";
    }
}
echo "\n";

// Summary
echo "=== Build Complete ===\n";
echo "  Compiled: {$compiled} pages\n";
if ($errors > 0) {
    echo "  Errors:   {$errors}\n";
}
echo "  Output:   dist/\n";
echo "\nDeploy the dist/ folder to Netlify.\n";
