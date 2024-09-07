<?php
$movie = new movie();
$id = $_GET["id"];
//$rows=$tintuc->kiemtrabinhluantrongtintuc($id);
$n1=$movie->n;

if($n1>=1)
{?>
	<script language="javascript">
		alert("Vẫn còn bình luận thuộc tin tức này!!!");
		window.location='index.php?mod=tintuc';
	</script>
<?php }
else
{
	
	$movie->xoamovie($id);
	$n=$movie->n;
	?>
	<script language="javascript">
		alert("Da xoa <?php echo $n;?> phim");
		window.location='index.php?mod=movie';
	</script>
<?php 
}
?>


