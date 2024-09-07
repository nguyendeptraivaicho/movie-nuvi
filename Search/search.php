<?php 
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
$id=postIndex('search field');
$id ="%$id%";
$movie=new movie();
?>
<div style="margin-top:20px;"><h2>Kết quả :</h2></div>
 <?php
				
					$b=$movie->searchmovie($id);
					$n=$movie->n;
					if($n<=0)
					{
						echo "Không tìm thấy nội dung!";
					}
					foreach($b as $v)
					{
				?>
				
                <?php
					}
				?>