<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
$path =ROOT."/News/tintuc.php";//mac dinh
$mod = isset($_GET["mod"])?$_GET["mod"]:"";
	$ac = isset($_GET["ac"])?$_GET["ac"]:"";
	if ($ac == 'detailtintuc')
	{
		$path = ROOT."/News/detailtintuc.php";
	}
	include $path;
?>