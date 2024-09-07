<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
$path =ROOT."/trangchu/trangchu.php";//mac dinh
	$mod = isset($_GET["mod"])?$_GET["mod"]:"";
	$ac = isset($_GET["ac"])?$_GET["ac"]:"";
	if($mod=="all" )
	{
		$path= ROOT."/Movie/modall.php";	
	}
	if($mod=="action" )
	{
		$path= ROOT."/Movie/modaction.php";	
	}
	if($mod=="romance")
	{
		$path= ROOT."/Movie/modromance.php";	
	}
	if ($mod=="comedy")
	{
		$path= ROOT."/Movie/modcomedy.php";
	}
	if ($mod=="horror")
	{
		$path= ROOT."/Movie/modhorror.php";
	}
	if($mod=="my" )
	{
		$path= ROOT."/Quocgia/modmy.php";	
	}
	if($mod=="hanquoc" )
	{
		$path= ROOT."/Quocgia/modhanquoc.php";	
	}
	if($mod=="vietnam" )
	{
		$path= ROOT."/Quocgia/modvietnam.php";	
	}
	if($mod=="trungquoc" )
	{
		$path= ROOT."/Quocgia/modtrungquoc.php";	
	}
	if($mod=="nhatban" )
	{
		$path= ROOT."/Quocgia/modnhatban.php";	
	}
	if($mod=="phimle" )
	{
		$path= ROOT."/Loaiphim/modphimle.php";	
	}
	if($mod=="phimbo" )
	{
		$path= ROOT."/Loaiphim/modphimbo.php";	
	}
	if ($mod=="news")
	{
		$path= ROOT."/News/modtintuc.php";
	}
	if ($mod=="phimmoi")
	{
		$path= ROOT."/News/modphimmoi.php";
	}
	if ($mod=="newphimle")
	{
		$path= ROOT."/trangchu/detailnewphimle.php";	
	}
	if ($mod=="newphimbo")
	{
		$path= ROOT."/trangchu/detailnewphimbo.php";	
	}
	if ($mod=="newphimmy")
	{
		$path= ROOT."/trangchu/detailnewphimmy.php";	
	}
	if ($mod=="phimhot")
	{
		$path= ROOT."/trangchu/detailphimhot.php";	
	}
	if ($mod=="yeuthich")
	{
		$path= ROOT."/yeuthich/yeuthich.php";	
	}
	
?>

<!-----------------Kết thúc-------------------->
<?php
	if ($mod=="search")
		{
				$path =ROOT."/Search/modsearch.php";
		}
	include $path;

?>