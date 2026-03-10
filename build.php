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
