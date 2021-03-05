<?php
//Include helper
include('constant.php');

//Call CURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/{$pageId}/photos");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "url={$imagePath}&published=true&access_token={$accessToken}");

$headers = [];
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = json_decode(curl_exec($ch), true);
curl_close($ch);

//Error
if (!empty($result['error']['message'])) {
    header("Location: {$appUrl}error.php?msg={$result['error']['message']}");
    exit;
}

//Success
header("Location: {$appUrl}success.php");
exit;
