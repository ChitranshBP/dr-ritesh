<?php
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.'));
foreach ($files as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        $new_content = preg_replace('/\]\s+\[/s', "],\n    [", $content);
        if ($new_content !== null && $new_content !== $content) {
            file_put_contents($file->getPathname(), $new_content);
            echo "Fixed syntax in " . $file->getPathname() . "\n";
        }
    }
}
