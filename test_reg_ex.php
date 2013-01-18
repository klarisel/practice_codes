<?php
echo "TEST preg_match<br>";
 $value="/image/item/set_busho1.gif";
 $value.="C:\xampp\htdocs\test";
$reg='/.gif/';
 if(preg_match('/.gif/i', $value) || preg_match('/.png/i', $value)
	|| preg_match('/.jpeg/i', $value) || preg_match('/.jpg/i', $value)
		|| preg_match('/.bmp/i', $value) ){
	echo 'true<br>';
	echo $value;
 }else{
 	echo 'false';
 }

?>