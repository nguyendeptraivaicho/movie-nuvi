<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}

$path =ROOT."/include/trangchu.php";//mac dinh
$mod = isset($_GET["mod"])?$_GET["mod"]:"";
$ac= isset($_GET["ac"])?$_GET["ac"]:"";
	if($mod=="user")
	{
		$path= ROOT."/module/user/user.php";
	}
	if($mod=="tintuc")
	{
		$path=  ROOT."/module/tintuc/tintuc.php";
	}
	if($mod=="movie")
	{
		$path= ROOT."/module/movie/movie.php";
	}
	if($mod=="binhluan")
	{
		$path= ROOT."/module/binhluan/binhluan.php";
	}
	if($mod=="quangcao")
	{
		$path= ROOT."/module/quangcao/quangcao.php";
	}
	include $path;
?>