<?php
/**
 * Generate PNG thumbnail for "Who Is a Good Candidate for TMS Therapy"
 *
 * INSTRUCTIONS:
 * 1. Open this file in your browser: http://localhost/blog/generate-thumbnail.php
 *    (Or navigate to: yoursite.com/blog/generate-thumbnail.php)
 * 2. Right-click on the image and "Save image as..."
 * 3. Save as "blog-tms-good-candidate.png" in the /assets/images/ folder
 */

$img = imagecreatetruecolor(1200, 630);

// Define colors
$bgDark    = imagecolorallocate($img, 15, 40, 71);
$primary   = imagecolorallocate($img, 37, 111, 168);
$secondary = imagecolorallocate($img, 93, 173, 238);
$white     = imagecolorallocate($img, 255, 255, 255);
$gold      = imagecolorallocate($img, 201, 162, 86);
$green     = imagecolorallocate($img, 46, 204, 113);
$gray      = imagecolorallocate($img, 180, 190, 200);

// Fill background
imagefill($img, 0, 0, $bgDark);

// Grid pattern (subtle)
$gridCol = imagecolorallocate($img, 37, 111, 168);
for ($x = 0; $x < 1200; $x += 40) {
    imageline($img, $x, 0, $x, 630, $gridCol);
}
for ($y = 0; $y < 630; $y += 40) {
    imageline($img, 0, $y, 1200, $y, $gridCol);
}

// Top accent bar
$goldBright = imagecolorallocate($img, 212, 183, 110);
imagefilledrectangle($img, 0, 0, 1200, 4, $goldBright);

// ===== LEFT SIDE: Brain/TMS Illustration =====
$cx = 280;
$cy = 300;

// Outer glow circles
for ($i = 3; $i >= 0; $i--) {
    imageellipse($img, $cx, $cy, 300 + $i * 40, 300 + $i * 40, $primary);
}

// Main brain circle
$brainBg = imagecolorallocate($img, 37, 111, 168);
imagefilledellipse($img, $cx, $cy, 260, 260, $brainBg);
imageellipse($img, $cx, $cy, 260, 260, $secondary);

// TMS coil rings
imagesetthickness($img, 4);
imageellipse($img, $cx, $cy, 200, 200, $secondary);
imagesetthickness($img, 3);
imageellipse($img, $cx, $cy, 150, 150, $primary);

// Inner brain
$brainFill = imagecolorallocate($img, 93, 173, 238);
imagefilledellipse($img, $cx, $cy, 100, 100, $brainFill);

// Neural connections
imagesetthickness($img, 2);
for ($i = 0; $i < 8; $i++) {
    $angle1 = ($i / 8) * 2 * M_PI - M_PI / 2;
    $angle2 = (($i + 4) / 8) * 2 * M_PI - M_PI / 2;
    $x1 = $cx + cos($angle1) * 50;
    $y1 = $cy + sin($angle1) * 50;
    $x2 = $cx + cos($angle2) * 50;
    $y2 = $cy + sin($angle2) * 50;
    imageline($img, $x1, $y1, $x2, $y2, $secondary);
}

// Neural nodes
for ($i = 0; $i < 8; $i++) {
    $angle = ($i / 8) * 2 * M_PI - M_PI / 2;
    $nx = $cx + cos($angle) * 50;
    $ny = $cy + sin($angle) * 50;
    imagefilledellipse($img, $nx, $ny, 12, 12, $secondary);
}

// Center pulse
imagefilledellipse($img, $cx, $cy, 35, 35, $white);

// Pulsing rings
for ($i = 1; $i <= 3; $i++) {
    imagesetthickness($img, 2);
    imageellipse($img, $cx, $cy, 50 + $i * 25, 50 + $i * 25, $secondary);
}

// ===== Checkmark Badge =====
$badgeX = 280;
$badgeY = 500;
imagefilledellipse($img, $badgeX, $badgeY, 56, 56, $green);
imageellipse($img, $badgeX, $badgeY, 56, 56, $green);

// Checkmark
imagesetthickness($img, 5);
imageline($img, $badgeX - 12, $badgeY, $badgeX - 3, $badgeY + 12, $green);
imageline($img, $badgeX - 3, $badgeY + 12, $badgeX + 14, $badgeY - 12, $green);

// ===== Floating Particles =====
$particles = [[100, 150], [200, 500], [450, 100], [520, 580], [80, 350], [550, 250]];
foreach ($particles as $p) {
    imagefilledellipse($img, $p[0], $p[1], 4, 4, $secondary);
}

// ===== RIGHT SIDE: Text Content =====

// Eyebrow text
$text = 'TMS THERAPY GUIDE';
imagestring($img, 5, 600, 120, $text, $secondary);

// Decorative line under eyebrow
imagefilledrectangle($img, 600, 148, 800, 150, $secondary);

// Title line 1
imagestring($img, 5, 600, 200, 'Who Is a Good', $white);

// Title line 2
imagestring($img, 5, 600, 260, 'Candidate for', $white);

// Title line 3 (highlighted in blue)
imagestring($img, 5, 600, 320, 'TMS Therapy?', $secondary);

// Subtitle
imagestring($img, 3, 600, 390, 'Discover if TMS is right for you', $gray);

// Bottom info bar background
$barBg = imagecolorallocate($img, 37, 111, 168);
imagefilledrectangle($img, 600, 460, 1100, 520, $barBg);

// Bottom info text
imagestring($img, 3, 620, 485, 'Dr. Ritesh Amin, MD', $white);
imagestring($img, 3, 820, 485, '|', $gray);
imagestring($img, 3, 840, 485, 'Board-Certified Psychiatrist', $secondary);
imagestring($img, 3, 1050, 485, '|', $gray);
imagestring($img, 3, 1070, 485, 'Edison, NJ', $gray);

// Bottom decorative elements
imagefilledellipse($img, 50, 590, 80, 80, $primary);
imagefilledellipse($img, 1150, 40, 100, 100, $primary);

// ===== OUTPUT =====
header('Content-Type: image/png');
imagepng($img, __DIR__ . '/../assets/images/blog-tms-good-candidate.png', 9);
imagedestroy($img);

echo '<html><body style="margin:0;background:#0f2847;display:flex;flex-direction:column;align-items:center;justify-content:center;min-height:100vh;font-family:Segoe UI,sans-serif;color:#fff;">';
echo '<h1 style="margin-bottom:20px;">Thumbnail Generated Successfully!</h1>';
echo '<img src="blog-tms-good-candidate.png" style="max-width:90%;border-radius:12px;box-shadow:0 10px 40px rgba(0,0,0,0.5);" />';
echo '<p style="margin-top:20px;color:#5dadee;">Image saved to: /assets/images/blog-tms-good-candidate.png</p>';
echo '<p style="margin-top:10px;opacity:0.7;">Right-click the image above and "Save image as..." if you need to download it.</p>';
echo '</body></html>';
