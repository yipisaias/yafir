<?php
$site = isset($_GET['site']) ? $_GET['site'] : '';
$iconUrl = "https://www.google.com/s2/favicons?domain_url=" . urlencode($site);

$imageContent = @file_get_contents($iconUrl);

if ($imageContent === false) {
    header('Content-Type: text/html', true, 404);
    echo "Favicon não encontrado.";
    exit;
}

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Accept');
header('Content-Type: image/png');
header('Content-Length: ' . strlen($imageContent));
header('X-Content-Type-Options: nosniff');

echo $imageContent;