<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
if ($ac=="xoa")
{
	include ROOT."/module/user/xoa.php";
	exit;	
	
}
$user=new user();
$rows=$user->listuser();
?>
<h2>Danh sách user</h2> 
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
            <th scope="col" class="rounded">User ID</th>
            <th scope="col" class="rounded">Mật Khẩu</th>
            <th scope="col" class="rounded">Họ</th>
            <th scope="col" class="rounded">Tên</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        
    <tbody>
    <?php
	
$n=$user->n;
foreach($rows as $r)
{
	?>
    	<tr>
            <td><?php echo $r["UserID"];?></td>
            <td><?php echo $r["Password"];?></td>
            <td><?php echo $r["Fname"];?></td>
            <td><?php echo $r["Lname"];?></td>

            <td><a href="index.php?mod=user&ac=xoa&id=<?php echo $r["UserID"];?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
       <?php } ?>
	   </tbody>
       </table>