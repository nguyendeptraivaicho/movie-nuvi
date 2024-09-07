<?php 
$a=getIndex("id");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>

</style>
<body>
<?php
	include "Connect Database.php";
	//$sqli="SELECT * FROM `listaction` ";
	$sqli="select * FROM phim where macountry='nhatban'";
	
	$result = mysqli_query($connect,$sqli);
	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
		if($row["id"]==$a)
		{
?>
	<div style="margin-top:50px;width:660px;">
    	<div style="float:left;">
        	<img src="<?php include "include/1.php" ?>/admin/module/movie/images/<?php echo $row["image"] ?>" width="152" height="214" />
        </div>
        <div style="float:left;margin-left:10px;background-color:#666;width:498px;">
        	<p style="color:#F90;font-size:20px;text-indent:10px;"><b><?php echo $row["namephim"] ?></b></p><br />
            <p style="font-size:14px;text-indent:10px;line-height:20px;"><b>Đạo diễn: <span style="color:#0CC;"><?php echo $row["actor"] ?></span></b></p>
            <?php 
				include "quocgia.php";
			?>
            <p style="font-size:14px;text-indent:10px;line-height:20px;"><b>Quốc gia : <span style="color:#0CC;"><a href="index.php?mod=<?php echo"$qg" ?>"><?php echo "$quocgia" ?></a></span></b></p>
            <p style="font-size:14px;text-indent:10px;line-height:20px;"><b>Ngày ra rạp : <span style="color:#0CC;"><?php echo $row["release"] ?></span></b></p>
            <p style="font-size:14px;text-indent:10px;line-height:20px;"><b>Công ty SX : <span style="color:#0CC;"><?php echo $row["company"] ?></span></b></p>
            <?php 
				include "theloai.php";
					
			?>
            <p style="font-size:14px;text-indent:10px;line-height:20px;"><b>Thể loại : <span style="color:#0CC;"><a href="index.php?mod=<?php echo"$tl" ?>"><?php echo "$theloai" ?> </a>,<a href="index.php?mod=<?php echo"$l" ?>"><?php echo "$loai" ?></a></span>
            <p style="font-size:14px;text-indent:10px;line-height:20px;">            <form action="" method="post">
   			<input type="submit" value="Thêm vào yêu thích" name="submit"> 
    		</form>
        </div>
    </div>
    <iframe width="640" height="400" src="https://www.youtube.com/embed/<?php echo $row["video"] ?>" frameborder="0" allowfullscreen></iframe>
    <div style="background:#1D1D1D;width:660px;margin-top:20px;">
    	<p style="color:#FF0;padding:10px 0 0 5px;"><b>NỘI DUNG PHIM:</b></p><br />
        <div style="padding:0 5px;">
        	<p style="line-height:20px;text-indent:20px;"><?php echo $row["info"] ?></p>
        </div>
     </div>
  <?php
	}}
	?>
</body>
</html>
<?php
if(isset($_SESSION["Username"]))
{
	$iduser = $_SESSION["UserID"];
}
if(isset($_POST['submit']))
{
	$err = 0;	 
 	$userphim = new userphim();
	$rows = $userphim->listuserphim($iduser);
	foreach($rows as $r)
	{
		if($a == $r['id'])
			$err=1;
	}
	if($err == 0)
	{
 		$userphim->themuserphim($iduser,$a);
		$n=$userphim->n; 
		if($n>0)
			{
		?>
			<script language="javascript">
			alert("Đã thêm vao danh sach yeu thich ");
			</script>
		<?php 
			}
	}
	else
	{
		?>
			<script language="javascript">
			alert("phim da co trong danh sach yeu thich ");
			</script>
		<?php 	
	}
	if(!isset($_SESSION["Username"]))
	{
		?>
			<script language="javascript">
			alert("Phải đăng nhập để sử dụng chức năng này");
			</script>
		<?php 
	}
}
?>
