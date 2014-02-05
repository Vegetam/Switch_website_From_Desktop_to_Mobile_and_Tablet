<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$OperaMini = strpos($_SERVER['HTTP_USER_AGENT'],"Opera mini");
$OperaMobi = strpos($_SERVER['HTTP_USER_AGENT'],"Opera mobi");
$Skyfire = strpos($_SERVER['HTTP_USER_AGENT'],"Skyfire");
$Maemo = strpos($_SERVER['HTTP_USER_AGENT'],"Maemo");
$Windows = strpos($_SERVER['HTTP_USER_AGENT'],"Windows phone");
$palm = strpos($_SERVER['HTTP_USER_AGENT'],"Palm");
$iemobile = strpos($_SERVER['HTTP_USER_AGENT'],"Iemobile");
$ymbian = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
$ymbianos = strpos($_SERVER['HTTP_USER_AGENT'],"Symbianos");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"Ipad");
$android3 = strpos($_SERVER['HTTP_USER_AGENT'],"Android 3");
$sch = strpos($_SERVER['HTTP_USER_AGENT'],"Ach-i800");
$playbook = strpos($_SERVER['HTTP_USER_AGENT'],"Playbook");
$tablet = strpos($_SERVER['HTTP_USER_AGENT'],"Tablet");
$kindle = strpos($_SERVER['HTTP_USER_AGENT'],"Kindle");
$gtp1000 = strpos($_SERVER['HTTP_USER_AGENT'],"Gt-p1000");
$sgh = strpos($_SERVER['HTTP_USER_AGENT'],"Sgh-t849");
$shw = strpos($_SERVER['HTTP_USER_AGENT'],"Shw-m180s");
$a510 = strpos($_SERVER['HTTP_USER_AGENT'],"A510");
$a511 = strpos($_SERVER['HTTP_USER_AGENT'],"A511");
$a100 = strpos($_SERVER['HTTP_USER_AGENT'],"A100");
$dell = strpos($_SERVER['HTTP_USER_AGENT'],"Dell streak");
$silk = strpos($_SERVER['HTTP_USER_AGENT'],"Silk");
if ($iphone || $android || $palmpre || $ipod || $berry || $OperaMini || $OperaMobi || $Skyfire || $Maemo || $Windows || $palm || $iemobile || $ymbian || $ymbianos || $ipad || $android3 || $sch || $playbook || $tablet|| $kindle || $gtp1000 || $sgh || $a510 || $a511 || $a100 || $dell || $silk == true) 
{ 
header('Location: http://www.yourwebsite.com/mobile/');
//OR
echo "<script>window.location='http://www.yourwebsite.com/mobile/'</script>";
}
?>