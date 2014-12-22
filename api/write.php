<?php 
$data = $_REQUEST["data"];
$arr = array("ip"=>$_SERVER['REMOTE_ADDR'],"data"=>$data,"time"=>strtotime("now"));
$data = "\n".json_encode($arr);
echo file_put_contents("content-121014.log",$data,FILE_APPEND);
