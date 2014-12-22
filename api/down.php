<?php 
$base64_string = $_REQUEST["fdata"];
$data = explode(',', $base64_string);
$decode = base64_decode($data[1]);
$image = imagecreatefromstring($decode);
header('Content-Type: image/jpeg');
header('Content-Disposition: attachment; filename=Jo-Baka.jpg');
header("Content-Transfer-Encoding: binary");
header('Expires: 0');
header('Pragma: no-cache');
ob_start();

imagejpeg($image,NULL,100);
imagedestroy($image);
$length = ob_get_length();
header("Content-Length: ".$length);
$data = ob_get_contents();
ob_flush();