	<div class="head">
         <h2>PHIM TÌNH CẢM-LÃNG MẠN</h2>
          <p class="text-right"><a href="index.php?mod=romance">See all</a></p>
    </div>
     <div style="width:660px;">
<?php
	include "Connect Database.php";
	$sqli="select * FROM phim where matl='romance'";
	$result = mysqli_query($connect,$sqli);
	//$result = $connect->query("SELECT * FROM list-movie");
	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
?>
        <div class="movie">
          <div class="movie-image"> <a href="index.php?mod=romance&ac=detailromance&id=<?php echo $row['id']; ?>"><span class="play" style="display: none;"><span class="name"><?php echo $row["namephim"] ?></span></span> <img src="<?php include "include/1.php" ?>/admin/module/movie/images/<?php echo $row["image"] ?>" alt=""></a> </div>
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

