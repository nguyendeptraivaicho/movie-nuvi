<?php
$user = new user();
$id = getIndex("id");
//$rows=$user->kiemtrabinhluanuser($id);
$n1=$user->n;

if($n1>=1)
{?>
	<script language="javascript">
		alert("User vẫn còn bình luận!!!");
		window.location='index.php?mod=user';
	</script>
<?php }
else
{
	
	$user->xoauser($id);
	$n=$loai->n;
	?>
	<script language="javascript">
		alert("Da xoa <?php echo $n;?> user");
		window.location='index.php?mod=user';
	</script>
<?php 
}
?>