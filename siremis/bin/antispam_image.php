<?php
require_once('app.inc');
$CodeLength=$_GET['length']?(int)$_GET['length']:6;
$CodeLevel=$_GET['level']?(int)$_GET['level']:1;

Header("Content-type: image/PNG");
$im = imagecreate(65,22);
$back = ImageColorAllocate($im, 245,245,245);
imagefill($im,0,0,$back);
srand((double)microtime()*1000000);

$graycolor = ImageColorallocate($im,102,102,102);
switch ($CodeLevel){
	default:
	case "1":
		for($i=0;$i<$CodeLength;$i++){
			//$font = ImageColorAllocate($im, rand(100,255),rand(0,100),rand(100,255));
			$authnum=rand(1,9);
			$vcodes.=$authnum;
			imagestring($im, 5, 2+$i*10, 3, $authnum, $graycolor);
		}
		break;
	case "2":
		for($i=0;$i<$CodeLength;$i++){
			//$font = ImageColorAllocate($im, rand(100,255),rand(0,100),rand(100,255));
			$codebase = "123456789ABCDEFGHIJKLMNPQRSTUVWXYZ";
			$codepos = rand(1,strlen($codebase));
			$authnum = substr($codebase,$codepos-1,1);
			$vcodes.= $authnum;
			imagestring($im, 5, 2+$i*10, 3, $authnum, $graycolor);
		}
		break;
}
for($i=0;$i<100;$i++) 
{
	//$randcolor = ImageColorallocate($im,rand(0,255),rand(0,255),rand(0,255));
	
	imagesetpixel($im, rand()%70 , rand()%30 , $graycolor);
}
ImagePNG($im);
ImageDestroy($im);
$vcodes=strtoupper($vcodes);
BizSystem::sessionContext()->setObjVar($_GET['form'], $_GET['name'], $vcodes);
?>