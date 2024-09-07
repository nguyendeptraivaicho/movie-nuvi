
<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
//include "Connect Database.php";
$path =ROOT."/Search/search.php";//mac dinh
$mod = isset($_GET["mod"])?$_GET["mod"]:"";
	$ac = isset($_GET["ac"])?$_GET["ac"]:"";
	if ($ac == 'detailsearch')
	{
		$path = ROOT."/Search/detailsearch.php";
	}
	include $path;
?>