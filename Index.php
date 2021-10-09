<?php
{
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://muzanova.com/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "salom");

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);



print ("$resultt ");

$boshqa="Muzanova.com.";
$meniki="Bbbjgcd";
$text="nurbek";
$new_text=str_replace($boshqa, $meniki, $text);




echo "$new_text";
}
