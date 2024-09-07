<?php
if(isset($_SESSION["Username"]))
{
	$iduser = $_SESSION["UserID"];
}
$userphim = new userphim();
$idup = $_GET["id"];
$userphim->xoauserphim($idup);
$n=$userphim->n;
if($n >0){
?>
<script language="javascript">
alert("Đã xóa phim khoi danh sach phim yeu thich");
window.location='index.php?mod=yeuthich&id=<?php echo $iduser; ?>';
</script>
<?php }
else
{
	echo "fail";	
}
?>
