<?php 
$count =  file_get_contents("bakkas.log");
$count = explode(",", $count);
$id = $_REQUEST["id"];
if($id==1){
$count[0] = (int)$count[0]+1;
}
if($id==2){
$count[1] = (int)$count[1]+1;
}
if($id==3){
$count[2] = (int)$count[2]+1;
}
if($id==4){
$count[3] = (int)$count[3]+1;
}
if($id==5){
$count[4] = (int)$count[4]+1;
}

$count = implode(",", $count);
echo file_put_contents("bakkas.log",$count);