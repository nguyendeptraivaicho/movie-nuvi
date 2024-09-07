	<div class="head">
         <h2>PHIM YÊU THÍCH</h2>
          <p class="text-right"><a href="index.php?mod=yeuthich">See all</a></p>
    </div>
    <div style="width:660px;">
<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}

if ($ac == 'xoa')
{
	include ROOT."/yeuthich/xoa.php";
	exit;	
}
if ($ac == 'detailyeuthich')
{
	include ROOT."/yeuthich/detailyeuthich.php";
	exit;	
}

include "Connect Database.php";
$id=getIndex('id');
$userphim = new userphim();
$rows = $userphim->listuserphim($id);
foreach($rows as $r)
{
	$idphim = $r['id'];
	$idup = $r['IDUP'];
						$movie = new movie();
						$rows=$movie->listmovieyt($idphim);
						foreach($rows as $r)
						{
							
					?>
        <div class="movie">
          <div class="movie-image"><a href="index.php?mod=yeuthich&ac=detailyeuthich&id=<?php echo $r['id']; ?>"><span class="play" style="display: none;"><span class="name"><?php echo $r["namephim"] ?></span></span> <img src="<?php include "include/1.php" ?>/admin/module/movie/images/<?php echo $r["image"] ?>" alt=""></a>  </div>
          <div class="rating">
            <p>RATING</p>
            <a href="index.php?mod=yeuthich&ac=xoa&id=<?php echo $idup; ?>">XÓA</a> 
            <div class="stars">
              <div class="stars-in"></div>
            </div>
            <span class="comments"><?php echo $row["comment"] ?></span> </div>
        </div>
        

       
<?php
	 }
}
?>
</div>


