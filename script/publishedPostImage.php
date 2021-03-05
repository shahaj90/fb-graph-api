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
$result = curl_exec($ch);

//Error
if (curl_errno($ch)) {
    header("Location: {$appUrl}/error.php");
}

//Close curl
curl_close($ch);

//Success
header("Location: {$appUrl}/success.php");
exit();
