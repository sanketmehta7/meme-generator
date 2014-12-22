<?php
$base64_string = $_REQUEST["fdata"];
$data = explode(',', $base64_string);
$data = base64_decode($data[1]); 
header('Content-Type: image/png');
header('Content-Disposition: attachment; filename=Jo-Baka.png');
header("Content-Transfer-Encoding: binary");
header('Expires: 0');
header('Pragma: no-cache');
header("Content-Length: ".strlen($data));
echo $data;