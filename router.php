<?php
// router.php for PHP built-in web server
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$file = __DIR__ . $uri;

// If it's the root directory
if ($uri === '/' || $uri === '') {
    if (file_exists(__DIR__ . '/index.php')) {
        require __DIR__ . '/index.php';
        return true;
    }
}

// If directory, check for index.php
if (is_dir($file)) {
    $index = rtrim($file, '/') . '/index.php';
    if (file_exists($index)) {
        require $index;
        return true;
    }
}

// If file exists as-is (static assets, .php, etc.)
if (file_exists($file) && !is_dir($file)) {
    return false; // Built-in server handles static files & direct php files
}

// If file exists with .php appended (clean URLs)
if (file_exists($file . '.php') && !is_dir($file . '.php')) {
    require $file . '.php';
    return true;
}

// Fallback: 404 Not Found
http_response_code(404);
echo "<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>404 Not Found</h1><p>The requested URL was not found on this server.</p></body></html>";
return true;
