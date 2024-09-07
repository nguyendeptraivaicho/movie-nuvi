<?php
$i=getIndex('id');
$movie=new movie();
$rows=$movie->listmovie();
$n=$movie->n;
$q=$n/5; 
?><h2>Danh sách phim</h2>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    
    	<tr>
            <th class="rounded" width="33">ID Phim</th>
            <th  class="rounded" width="63">Ten Phim</th>
            <th  class="rounded" width="220">Noi dung</th>
            <th width="81"  class="rounded">Tóm tắt</th>
            <th width="81"  class="rounded">Hình</th>
            <th width="81"  class="rounded">Video</th>
            <th width="33"  class="rounded">Rate</th>
            <th width="64"  class="rounded">Comment</th>
            <th width="78"  class="rounded">Ngay ra rap</th>
            <th width="71"  class="rounded">Dao dien</th>
            <th width="71"  class="rounded">Cong ty SX</th>
            <th width="71"  class="rounded">Quoc Gia</th>
            <th  class="rounded" width="30">Mã Thể Loại</th>
            <th  class="rounded" width="30">Mã Loại Phim</th>
            <th  class="rounded" width="32">Edit</th>
            <th  class="rounded" width="45">Delete</th>
        </tr>
    
        
    
			
			 
        <?php
		$p=$movie->phantrang($i);
			
		foreach($p as $r)
		{	
			?>
    	<tr>
            <td width="33" ><?php echo $r["id"];?></td>
            <td width="63"><?php echo $r["namephim"];?></td>	
            <td width="220" ><textarea name="info" rows="5" cols="20" readonly="readonly"><?php echo $r["info"];?></textarea></td>
            <td width="81"><textarea name="info" rows="5" cols="20" readonly="readonly"><?php echo $r["summary"];?></textarea></td>
            <td width="81"><img src="../admin/module/movie/images/<?php echo $r["image"];?>"  width="50px" height="70px"/></td>
             <td width="81"><?php echo $r["video"];?></td>
            <td width="33"><?php echo $r["rate"];?></td>
            <td width="64" ><?php echo $r["comment"];?></td>
            <td width="78" ><?php echo $r["release"];?></td>
            <td width="71" ><?php echo $r["actor"];?></td>
            <td width="71" ><?php echo $r["company"];?></td>
            <td width="71" ><?php echo $r["macountry"];?></td>
            <td width="33"><?php echo $r["matl"];?></td>
            <td width="33"><?php echo $r["maloai"];?></td>

            <td width="32"><a href="index.php?mod=movie&ac=sua&id=<?php echo $r["id"];?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td width="45"s><a href="index.php?mod=movie&ac=xoa&id=<?php echo $r["id"];?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
       <?php } ?>
	   
       </table>
       <div class="sotrang">
       <?php for($j=0;$j<($q);$j++)
	   {?>
        <a href="index.php?mod=movie&ac=phantrang&id=<?php echo $j;?>"><?php echo $j;?></a>
        <?php }?></div>
       <a href="index.php?mod=movie&ac=them" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
