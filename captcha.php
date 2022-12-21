<?php
session_start();
$rand1=rand(1,20);
$rand2=rand(1,20);
$op=['+','-'];
$ope=$op[rand(0,1)];
if($ope=='+'){
  $res=$rand1+$rand2;
}else{
	$res=$rand1-$rand2;
}
$captcha=$rand1." ".$ope." ".$rand2;
$_SESSION['CAPTCHA']=$res;


// Create captcha image
  $layer = imagecreatetruecolor(168, 37);
  $captcha_bg = imagecolorallocate($layer, 0,0,0);
  imagefill($layer, 0, 0, $captcha_bg);
  $captcha_text_color = imagecolorallocate($layer, 255, 255, 255);
  imagestring($layer, 5, 55, 10, $captcha, $captcha_text_color);
  header("Content-type: image/jpeg");
  imagejpeg($layer);

?>