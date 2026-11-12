<?php
/**
 * Generate Video Thumbnails
 * This script creates placeholder thumbnail images for the videos
 */

// Configuration
$videoDir = __DIR__ . '/public/frontend/assets/img/client-videos/';
$thumbnailSize = [1280, 720];
$videos = [
    'testimonialsocial-new' => 'Client Testimonials',
    'walkthrough-new' => 'Project Walkthrough',
    'walkthroughtour-new' => 'Virtual Tour'
];

// Ensure GD library is loaded
if (!extension_loaded('gd')) {
    die("GD library is not installed. Please install PHP GD extension.\n");
}

echo "Generating video thumbnails...\n\n";

foreach ($videos as $videoName => $title) {
    $outputPath = $videoDir . $videoName . '_thumbnail.webp';
    
    // Create a basic placeholder image using GD
    $image = imagecreatetruecolor($thumbnailSize[0], $thumbnailSize[1]);
    
    // Define colors
    $darkGray = imagecolorallocate($image, 51, 51, 51);
    $accentColor = imagecolorallocate($image, 164, 121, 102); // Brand color
    $white = imagecolorallocate($image, 255, 255, 255);
    $lightGray = imagecolorallocate($image, 200, 200, 200);
    
    // Fill background with dark gradient effect
    for ($i = 0; $i < $thumbnailSize[1]; $i++) {
        $color = imagecolorallocate($image, 
            51 + (int)(($i / $thumbnailSize[1]) * 30),
            51 + (int)(($i / $thumbnailSize[1]) * 30),
            51 + (int)(($i / $thumbnailSize[1]) * 30)
        );
        imageline($image, 0, $i, $thumbnailSize[0], $i, $color);
    }
    
    // Add diagonal stripes for visual interest
    $stripeWidth = 40;
    $stripeSpacing = 100;
    for ($x = -$thumbnailSize[1]; $x < $thumbnailSize[0]; $x += $stripeSpacing) {
        imageline($image, $x, 0, $x + $thumbnailSize[1], $thumbnailSize[1], 
            imagecolorallocate($image, 80, 80, 80));
    }
    
    // Draw a play button in the center
    $centerX = $thumbnailSize[0] / 2;
    $centerY = $thumbnailSize[1] / 2;
    $buttonRadius = 80;
    
    // Draw circle background for play button
    imagefilledellipse($image, (int)$centerX, (int)$centerY, 
        $buttonRadius * 2, $buttonRadius * 2, 
        imagecolorallocate($image, 255, 255, 255));
    
    // Draw play triangle
    $points = [
        (int)($centerX - 30), (int)($centerY - 35),
        (int)($centerX - 30), (int)($centerY + 35),
        (int)($centerX + 40), (int)$centerY
    ];
    imagefilledpolygon($image, $points, 3, $darkGray);
    
    // Add title text
    $fontSize = 5; // Built-in GD font size
    $textX = 30;
    $textY = 30;
    imagestring($image, $fontSize, $textX, $textY, $title, $accentColor);
    
    // Add "Click to play" text at bottom
    $playTextY = $thumbnailSize[1] - 50;
    imagestring($image, 3, $textX, $playTextY, 'Click to play video', $lightGray);
    
    // Save as WEBP
    if (function_exists('imagewebp')) {
        imagewebp($image, $outputPath, 80);
        echo "✓ Created: {$videoName}_thumbnail.webp\n";
    } else {
        // Fallback to JPEG if WEBP is not available
        $jpgPath = $videoDir . $videoName . '_thumbnail.jpg';
        imagejpeg($image, $jpgPath, 80);
        echo "✓ Created (JPEG): {$videoName}_thumbnail.jpg\n";
    }
    
    imagedestroy($image);
}

echo "\n✓ All thumbnails generated successfully!\n";
echo "Note: These are placeholder thumbnails. For better results, replace them with actual video frames.\n";
?>
