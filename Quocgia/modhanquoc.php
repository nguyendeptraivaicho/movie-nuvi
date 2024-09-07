<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
//include "Connect Database.php";
$path =ROOT."/Quocgia/hanquoc.php";//mac dinh
$mod = isset($_GET["mod"])?$_GET["mod"]:"";
	$ac = isset($_GET["ac"])?$_GET["ac"]:"";
	if ($ac == 'detailhanquoc')
	{
		$path = ROOT."/Quocgia/detailhanquoc.php";
	}
	include $path;
?>