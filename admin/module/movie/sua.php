<?php
$movie = new movie();
$id=getIndex("id");
$rows=$movie->listmovie();
foreach($rows as $r)
if($r['id']==$id)
	{
		$omage=$r['image'];
?>
<fieldset>
<legend>Nhập thông tin</legend>
<form action="" method="post" enctype="multipart/form-data">
<table  align="center">
	<tr><td>ID Phim:</td><td><input type="text" name="id" value="<?php echo $r['id'];?>" readonly > /></td></tr>
    <tr><td>Ten Phim:</td><td><input type="text" name="namephim" value="<?php echo $r['namephim'];?>"></td></tr>
    <tr><td>Nội dung:</td><td><textarea name="info" rows="5" cols="20" ><?php echo $r['info'];?></textarea></td></tr>
    <tr><td>Tóm tắt:</td><td><textarea name="summary" rows="5" cols="20"><?php echo $r['summary'];?></textarea></td></tr>
    <tr><td>Video:</td><td><input type="text" name="video" value="<?php echo $r['video'];?>" /></td></tr>
    <tr><td>Hình:</td><td><input type="file" name="hinh" /></td></tr>
    <tr><td>Rate:</td><td><input type="text" name="rate" value="<?php echo $r['rate'];?>"></td></tr>
    <tr><td>Comment:</td><td><input type="text" name="comment" value="<?php echo $r['comment'];?>"></td></tr>
	<tr><td>Ngay ra rap:</td><td><input type="text" name="release" value="<?php echo $r['release'];?>"></td></tr>
    <tr><td>Dao dien:</td><td><input type="text" name="actor" value="<?php echo $r['actor'];?>"></td></tr>
    <tr><td>Cong ty SX:</td><td><input type="text" name="company" value="<?php echo $r['company'];?>"></td></tr>
 <?php
}?>
<?php
$rows=$movie->listmovie();
foreach($rows as $r)
if($r['id']==$id)
	{
  ?> 						
	<tr><td>Quốc gia:</td><td><select name="idcountry">
    						
                            <option value="<?php echo $r['macountry'];?>"><?php echo $r['macountry'];?></option>
                            <?php 
							$quocgia=new quocgia();
							$rows2=$quocgia->listquocgia();
							foreach($rows2 as $v)
							{
							?>
							<option value="<?php echo $v['macountry'];?>"><?php echo $v['tencountry'];?></option>
                            <?php }?>
						</td></tr>
 <?php	
}
?><?php
$rows=$movie->listmovie();
foreach($rows as $r)
if($r['id']==$id)
	{
	?>
    <tr><td>Thể Loại Phim:</td><td><select name="idloai">
    						
                            <option value="<?php echo $r['matl'];?>"><?php echo $r['matl'];?></option>
                            <?php 
							$loaiphim=new loai();
							$rows=$loaiphim->listloai();
							foreach($rows as $r)
							{
							?>
							<option value="<?php echo $r['matl'];?>"><?php echo $r['tentl'];?></option>
                            <?php }?>
						</td></tr>
<?php	
}
?><?php
$rows=$movie->listmovie();
foreach($rows as $r)
if($r['id']==$id)
	{
?>
    <tr><td>Loại Phim:</td><td><select name="idl">
    						
                            <option value="<?php echo $r['maloai'];?>"><?php echo $r['maloai'];?></option>
                            <?php 
							$loai=new loaiphim();
							$rows=$loai->listloaiphim();
							foreach($rows as $r)
							{
							?>
							<option value="<?php echo $r['maloai'];?>"><?php echo $r['tenloai'];?></option>
                            <?php }?>
						</td></tr>
	
 <?php	
}
?>   
    <tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>
</fieldset>
<?php
if(isset($_POST) && isset($_POST['submit']) && isset($_FILES))
{
	$id = strip_tags($_POST['id']);
	$namephim=strip_tags($_POST['namephim']);
	$info=strip_tags($_POST['info']);
	$summary=strip_tags($_POST['summary']);
	$rate=strip_tags($_POST['rate']);
	$comment=strip_tags($_POST['comment']);
	$release=strip_tags($_POST['release']);
	$actor=strip_tags($_POST['actor']);
	$macountry=strip_tags($_POST['idcountry']);
	$company=strip_tags($_POST['company']);
	$video=strip_tags($_POST['video']);
	$matl=strip_tags($_POST['idloai']);
	$maloai=strip_tags($_POST['idl']);
	$hinh=$_FILES['hinh']['name']; 
	$arrImg=array("image/jpeg", "image/png" , "image/bmp" , "image/gif");
	if( $namephim=="" || $info=="" || $rate=="" || $comment=="" || $release=="" || $actor=="" || $macountry=="" || $company==""
	 ||$hinh=="" || $matl=="" || $video=="" || $maloai=="" || $summary=="")	 {?>
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
						if (!move_uploaded_file($temp, "../admin/module/movie/images/".$name))
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
							$movie->suamovie($id,$namephim,$info,$hinh,$rate,$comment,$release,$actor,$macountry,$company,$matl,$video,$maloai,$summary);
							$n=$movie->n; 
							?>
							<script language="javascript">
                            alert("Da sua <?php echo $n;?> phim");
                            window.location='index.php?mod=movie';
                            </script>
                            <?php
						}
				}
			
		}
}

	
	?>