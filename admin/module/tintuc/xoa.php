<?php
$tintuc = new tintuc();
$id = $_GET["id"];
//$rows=$tintuc->kiemtrabinhluantrongtintuc($id);
$n1=$tintuc->n;

if($n1>=1)
{?>
	<script language="javascript">
		alert("Vẫn còn bình luận thuộc tin tức này!!!");
		window.location='index.php?mod=tintuc';
	</script>
<?php }
else
{
	
	$tintuc->xoatintuc($id);
	$n=$tintuc->n;
	?>
	<script language="javascript">
		alert("Da xoa <?php echo $n;?> tin tuc");
		window.location='index.php?mod=tintuc';
	</script>
<?php 
}
?>


