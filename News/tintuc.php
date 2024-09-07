<div class="head">
         <h2>Tin tức</h2>
          <p class="text-right"><a href="index.php?mod=news">See all</a></p>
    </div>
    <div style="width:675px;">
<?php
		
	include "Connect Database.php";
	//$sqli="SELECT * FROM `listaction` ";
	/*$sqli="select theloai.tentl,phim.name,phim.info,phim.image,phim.video,phim.matl,phim.rate,phim.comment,phim.release,phim.actor,phim.country,phim.company FROM phim RIGHT JOIN theloai ON phim.matl = theloai.matl where theloai.matl=:ID";
	$arr=array(":ID"=>$id);
		return $this->selectQuery($sqli,$arr);*/
	$sqli="SELECT * FROM `news` ";
	$result = mysqli_query($connect,$sqli);

	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
		
?>  
	<div style="float:left;">
    <div class="hinh_anh_tin_tuc">
            <a href="index.php?mod=news&ac=detailtintuc&id=<?php echo $row['idtintuc']; ?>"><img src="<?php include "include/1.php" ?>/admin/module/tintuc/images/<?php echo $row["image"] ?>" alt=""></a>
       </div>
       <div class="information">
            <a href="index.php?mod=news&ac=detailtintuc&id=<?php echo $row['idtintuc']; ?>"><p class="name_tin_tuc"><strong><?php echo $row["title"] ?></strong></p></a>
            <p class="date" style="margin:3px 0;font-size:12px"><?php echo $row["date"] ?></p>
            <p><?php echo $row["summary"] ?></p>
            <div class="doc" ><a href="index.php?mod=news&ac=detailtintuc&id=<?php echo $row['idtintuc']; ?>"><p>Read more</p></a></div>
       </div>
       </div>
      
   <?php
	}
?>
</div>