<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
//include "Connect Database.php";
$path =ROOT."/Movie/horror.php";//mac dinh
$mod = isset($_GET["mod"])?$_GET["mod"]:"";
	$ac = isset($_GET["ac"])?$_GET["ac"]:"";
	if ($ac == 'detailhorror')
	{
		$path = ROOT."/Movie/detailhorror.php";
	}
	include $path;
?>