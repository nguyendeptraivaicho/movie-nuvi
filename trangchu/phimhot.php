
<?php
	include "Connect Database.php";
	$sqli="SELECT * FROM `phim` order by phim.comment DESC limit 0,4";
	$result = mysqli_query($connect,$sqli);
	//$result = $connect->query("SELECT * FROM list-movie");
	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
?>

				<div class="phim-hot">
            		<a href="index.php?mod=phimhot&id=<?php echo $row['id']; ?>"><img src="<?php include "include/1.php" ?>/admin/module/movie/images/<?php echo $row["image"] ?>" /></a>
                    <div class="info-box-right">
                    	<a href="index.php?mod=phimhot&id=<?php echo $row['id']; ?>" style="text-decoration:none;" ><p class="tieude-box-right"><?php echo $row['namephim']; ?></p></a>
                    	<p style="margin-top:8px"><?php echo $row["summary"] ?></p>
                    </div>
              	</div>
 <?php
	 }
?>