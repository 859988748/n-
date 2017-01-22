<?php
header("Content-type:image/png");
date_default_timezone_set('PRC');
$data = Array();
$xiaoji1 = 0;
$xiaoji2 = 0;
for ($i= 0;$i< 11; $i++){
	if(isset($_COOKIE[$i])){
		$data[]= $_COOKIE[$i];
		if ($i>1 && $i < 6){
			$xiaoji1 += $_COOKIE[$i];
		}
		if ($i == 6){
			$xiaoji2 = $_COOKIE[$i];
		}
        //$result = setcookie($i,false);
	}else{
		exit();
	}
}
$currentYearMonth = date('Y');
$currentYearMonth .= "年";
$currentYearMonth .= date('n');
$currentYearMonth .= "月工资单";
$data[]=$xiaoji1;
$data[]=$xiaoji2; 
$mubanPath = "./XI4HVd/muban.png";
$img=imagecreatefrompng($mubanPath);
$black = ImageColorAllocate ( $img, 0, 0, 0 );
$size = 0;
$angle = 0;
$font = "./XI4HVd/STXIHEI.TTF";
$y = 160;
//小计1和小计2放在最后,他们相应的x坐标也是放在最后
$arrayX = Array(25,180,330,485,638,788,1094,1404,1555,1708,1859,943,1249);
$result = imagettftext($img, 12, 0, 23, 58, $black, $font, $currentYearMonth);
for ($i= 0;$i< 13; $i++){
	$result = imagettftext($img, 12, 0, $arrayX[$i], $y, $black, $font, $data[$i]);
}
imagepng($img);
imagedestroy($img);