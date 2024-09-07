<?php include "editor/editor1.php";?>
<?php
$tintuc = new tintuc();
$id=getIndex("id");
$rows=$tintuc->listtintuc();
foreach($rows as $r)
if($r['idtintuc']==$id)
	{
		
?>
<fieldset>
<legend>Nhập thông tin</legend>
<form action="" method="post" enctype="multipart/form-data">
<table  align="center">
    
    <tr><td>ID Phim:</td><td><input type="text" name="id" value="<?php echo $r['idtintuc'];?>" readonly /></td></tr>
    <tr><td>Tiêu đề:</td><td><input type="text" name="title" value="<?php echo $r['title'];?>" /></td></tr>
    <tr><td>Ngày phát hành:</td><td><input type="text" name="date" value="<?php echo $r['date'];?>"/></td></tr>
    <tr><td>Tóm tắt:</td><td><textarea name="summary" rows="5" cols="20" ><?php echo $r['summary'];?></textarea></td></tr>
    <tr><td>Nội dung 1:</td><td><textarea name="info1" rows="5" cols="20"><?php echo $r['info1'];?></textarea></td></tr>
    <tr><td>Nội dung 2:</td><td><textarea name="info2" rows="5" cols="20"><?php echo $r['info2'];?></textarea></td></tr>
    <tr><td>Hình:</td><td><input type="file" name="hinh" /></td></tr>
    <tr><td>Nội dung 3:</td><td><textarea name="info3" rows="5" cols="20"><?php echo $r['info3'];?></textarea></td></tr>
    <tr><td>Nội dung 4:</td><td><textarea name="info4" rows="5" cols="20"><?php echo $r['info4'];?></textarea></td></tr>
   
    <tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>
</fieldset>
<?php
}
	
if(isset($_POST['submit']))
{	
	
	$id=strip_tags($_POST['id']);
	$title=strip_tags($_POST['title']);
	$date=strip_tags($_POST['date']);
	$summary=strip_tags($_POST['summary']);
	$info1=strip_tags($_POST['info1']);
	$info2=strip_tags($_POST['info2']);
	$info3=strip_tags($_POST['info3']);
	$info4=strip_tags($_POST['info4']);
	$hinh=$_FILES['hinh']['name']; 
	$arrImg=array("image/jpeg", "image/png" , "image/bmp" , "image/gif");
	if( $title=="" || $date=="" || $summary=="" || $info1=="" || $hinh=="" || $info3=="" )	 {?>
		<script type="text/javascript" language="javascript">
			alert ("Phải nhập đầy đủ thông tin");
		</script>	
	<?php  }
	else
		{
			$type = $_FILES["hinh"]["type"];
			if(!in_array($type, $arrImg))
			{
			?>
				<script type="text/javascript" language="javascript">
					alert ("Không phải file hình");
					window.history.go(-1);
				</script>
			<?php
		
			}
		
			else
					{
						$temp = $_FILES["hinh"]["tmp_name"];
						$name = $_FILES["hinh"]["name"];
						if (!move_uploaded_file($temp, "../admin/module/tintuc/images/".$name))
						{
						?>
							<script type="text/javascript" language="javascript">
								alert ("Không thể lưu file hình 1");
								window.history.go(-1);
							</script>
						<?php
						}
						
						else
						{
							$tintuc->suatintuc($id,$title,$date,$summary,$info1,$info2,$hinh,$info3,$info4);
							$n=$tintuc->n; 
							?>
							<script language="javascript">
                            alert("Da sua <?php echo $n;?> tin tuc");
                            window.location='index.php?mod=tintuc';
                            </script>
                            <?php
						}
					}
			
		}
}

	
	?>

