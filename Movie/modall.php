<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
//include "Connect Database.php";
$path =ROOT."/Movie/all.php";//mac dinh
$mod = isset($_GET["mod"])?$_GET["mod"]:"";
	$ac = isset($_GET["ac"])?$_GET["ac"]:"";
	if ($ac == 'detailall')
	{
		$path = ROOT."/Movie/detailall.php";
	}
	include $path;
?>