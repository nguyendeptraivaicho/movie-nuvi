	<div class="head">
         <h2>PHIM HÀN QUỐC</h2>
          <p class="text-right"><a href="index.php?mod=hanquoc">See all</a></p>
    </div>
    <div style="width:660px;">
<?php
		
	include "Connect Database.php";
	//$sqli="SELECT * FROM `listaction` ";
	/*$sqli="select theloai.tentl,phim.name,phim.info,phim.image,phim.video,phim.matl,phim.rate,phim.comment,phim.release,phim.actor,phim.country,phim.company FROM phim RIGHT JOIN theloai ON phim.matl = theloai.matl where theloai.matl=:ID";
	$arr=array(":ID"=>$id);
		return $this->selectQuery($sqli,$arr);*/
	$sqli="select * FROM phim where macountry='hanquoc'";
	$result = mysqli_query($connect,$sqli);

	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
?>
        <div class="movie">
          <div class="movie-image"> <a href="index.php?mod=hanquoc&ac=detailhanquoc&id=<?php echo $row['id']; ?>"><span class="play" style="display: none;"><span class="name"><?php echo $row["namephim"] ?></span></span> <img src="<?php include "include/1.php" ?>/admin/module/movie/images/<?php echo $row["image"] ?>" alt=""></a> </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments"><?php echo $row["comment"] ?></span> </div>
        </div>
        

       
<?php
	 }
?>
</div>


