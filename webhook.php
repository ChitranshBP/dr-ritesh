<?php
// Secure Webhook Deployment for dr-ritesh
$secret_file = __DIR__ . '/../webhook_secret.txt';
if (!file_exists($secret_file)) {
    http_response_code(500);
    die('Webhook secret not configured on server');
}
$secret = trim(file_get_contents($secret_file));
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';

if (!$signature) {
    http_response_code(400);
    die('Missing signature');
}

$payload = file_get_contents('php://input');
$expected_signature = 'sha256=' . hash_hmac('sha256', $payload, $secret);

if (!hash_equals($expected_signature, $signature)) {
    http_response_code(403);
    die('Invalid signature');
}

$data = json_decode($payload, true);
if (isset($data['ref']) && $data['ref'] === 'refs/heads/main') {
    $output = [];
    $return_var = 0;
    
    // Execute git pull. Using absolute path of git.
    exec("cd /home/drriteshamin.com/public_html && /usr/bin/git -c safe.directory=/home/drriteshamin.com/public_html pull origin main 2>&1", $output, $return_var);
    
    // Log the output
    $log_data = date('Y-m-d H:i:s') . " - Status: " . $return_var . "\n" . implode("\n", $output) . "\n\n";
    file_put_contents('deploy_log.txt', $log_data, FILE_APPEND);
    
    if ($return_var === 0) {
        echo "Updated successfully:\n" . implode("\n", $output);
    } else {
        http_response_code(500);
        echo "Git pull failed:\n" . implode("\n", $output);
    }
} else {
    echo "Event ignored (not main branch).";
}
