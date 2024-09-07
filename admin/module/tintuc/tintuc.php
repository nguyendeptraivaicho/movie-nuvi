<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
if ($ac=="xoa")
{
	include ROOT."/module/tintuc/xoa.php";
	exit;	
	
}
if($ac=="them")
{
	include ROOT."/module/tintuc/them.php";
	exit;
}
if($ac=="sua")
{
	include ROOT."/module/tintuc/sua.php";
	exit;
}
if($ac=="phantrang")
{
	include ROOT."/module/tintuc/phantrang.php";
	exit;
}
$tintuc =new tintuc();
$rows=$tintuc->listtintuc();

$n=$tintuc->n;
$q=$n/5;
?>
<h2>Danh sách Tin tức  </h2>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    
    	<tr>
            <th class="rounded" width="33">ID Tin tức</th>
            <th  class="rounded" width="63">Tiêu đề</th>
            <th width="78"  class="rounded">Ngày phát hành</th>
            <th width="30"  class="rounded">Tóm tắt</th>
            <th  class="rounded" width="220">Noi dung 1</th>
            <th  class="rounded" width="220">Noi dung 2</th>
            <th width="81"  class="rounded">Hình</th>
            <th  class="rounded" width="220">Noi dung 3</th>
            <th  class="rounded" width="220">Noi dung 4</th>
            <th  class="rounded" width="32">Edit</th>
            <th  class="rounded" width="45">Delete</th>
        </tr>
    
        
    
       <?php for($i=0;$i<=$n/5;$i++)
	   {
		   if ( !$i )
				{
    				$i = 0 ;
				}
			$p=$tintuc->phantrang($i);
			 
		?>
        <?php
		
		foreach($p as $r)
		{	
			?>
    	<tr>
            <td width="33" ><?php echo $r["idtintuc"];?></td>
            <td width="63"><?php echo $r["title"];?></td>	
           <td width="78" ><?php echo $r["date"];?></td>
             <td width="30"><textarea name="s" rows="5" cols="20" readonly="readonly"><?php echo $r["summary"];?></textarea></td>
             <td width="220" ><textarea name="i1" rows="5" cols="20" readonly="readonly"><?php echo $r["info1"];?></textarea></td>
             <td width="220" ><textarea name="i2" rows="5" cols="20" readonly="readonly"><?php echo $r["info2"];?></textarea></td>
            <td width="81"><img src="../admin/module/tintuc/images/<?php echo $r["image"];?>"  width="50px" height="70px"/></td>
            <td width="220" ><textarea name="i3" rows="5" cols="20" readonly="readonly"><?php echo $r["info3"];?></textarea></td>
            <td width="220" ><textarea name="i4" rows="5" cols="20" readonly="readonly"><?php echo $r["info4"];?></textarea></td>
          

            <td width="32"><a href="index.php?mod=tintuc&ac=sua&id=<?php echo $r["idtintuc"];?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td width="45"s><a href="index.php?mod=tintuc&ac=xoa&id=<?php echo $r["idtintuc"];?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
       <?php } break;} ?>
	   
       </table>
       <div class="sotrang">
       <?php for($i=0;$i<$q;$i++)
	   {?>
        <a href="index.php?mod=tintuc&ac=phantrang&id=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?></div>
       <a href="index.php?mod=tintuc&ac=them" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
