<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
//include "Connect Database.php";
$path =ROOT."/Quocgia/trungquoc.php";//mac dinh
$mod = isset($_GET["mod"])?$_GET["mod"]:"";
	$ac = isset($_GET["ac"])?$_GET["ac"]:"";
	if ($ac == 'detailtrungquoc')
	{
		$path = ROOT."/Quocgia/detailtrungquoc.php";
	}
	include $path;
?>