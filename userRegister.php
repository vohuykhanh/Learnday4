<?php
$cuontarr =  1;
$jsondecode = [];
$myfile = fopen("users.txt", "r") or die("Unable to open file!");
$json= fread($myfile, filesize("users.txt"));
fclose($myfile);
$jsondecode = json_decode($json, true);

$user= $_REQUEST['user'];
$password= $_REQUEST['password'];
$arraydata=['userName'=>$user,'password'=>$password];
$cuontarr += count($jsondecode);
$jsondecode[$cuontarr]=$arraydata;
echo $endjson= json_encode($jsondecode);

$myfile = fopen("users.txt", "w") or die("Unable to open file!");
fwrite($myfile, $endjson);
fclose($myfile);

?>
