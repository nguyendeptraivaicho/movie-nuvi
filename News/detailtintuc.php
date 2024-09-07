<div style="width:auto">
<?php 
$a=getIndex("id");

include "Connect Database.php";
	//$sqli="SELECT * FROM `listaction` ";
	/*$sqli="select theloai.tentl,phim.name,phim.info,phim.image,phim.video,phim.matl,phim.rate,phim.comment,phim.release,phim.actor,phim.country,phim.company FROM phim RIGHT JOIN theloai ON phim.matl = theloai.matl where theloai.matl=:ID";
	$arr=array(":ID"=>$id);
		return $this->selectQuery($sqli,$arr);*/
	$sqli="SELECT * FROM `news` ";
	$result = mysqli_query($connect,$sqli);

	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
			if($row["idtintuc"]==$a)
		{
?>
<div class="tieudetintuc"><p align="center"><strong><?php echo $row["title"] ?></strong></p></div>
<br />
<p style="font-size:16px"><b><?php echo $row["summary"] ?></b></p><br />
<p style="font-size:14px"><?php echo $row["info1"] ?></p><br />
<p style="font-size:14px"><?php echo $row["info2"] ?></p><br />
<img src="<?php include "include/1.php" ?>/admin/module/tintuc/images/<?php echo $row["image"] ?>" width="660" height="371" /><br />
<div style="width:660px">
<p style="font-size:14px;margin-top:10px;"><?php echo $row["info3"] ?></p><br />
<p style="font-size:14px;" ><?php echo $row["info4"] ?></p><br />

<?php
	}}
	?>
</div></div>
