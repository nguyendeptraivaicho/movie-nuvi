<?php 
$a=getIndex("id");

include "Connect Database.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>

</style>
<body>
	<div style="margin-top:50px;width:660px;">
    	<div style="float:left;">
        	<img src="<?php echo $row["image"] ?>" width="152" height="214" />
        </div>
        <div style="float:left;margin-left:10px;background-color:#666;width:498px;">
        	<p style="color:#F90;font-size:20px;text-indent:10px;"><b><?php echo $row["name"] ?></b></p><br />
            <p style="font-size:14px;text-indent:10px;line-height:20px;"><b>Đạo diễn: <span style="color:#0CC;"><?php echo $row["actor"] ?></span></b></p>
            <p style="font-size:14px;text-indent:10px;line-height:20px;"><b>Quốc gia : <span style="color:#0CC;"><?php echo $row["country"] ?></span></b></p>
            <p style="font-size:14px;text-indent:10px;line-height:20px;"><b>Ngày ra rạp : <span style="color:#0CC;"><?php echo $row["release"] ?></span></b></p>
            <p style="font-size:14px;text-indent:10px;line-height:20px;"><b>Công ty SX : <span style="color:#0CC;"><?php echo $row["company"] ?></span></b></p>
            <p style="font-size:14px;text-indent:10px;line-height:20px;"><b>Thể loại : <span style="color:#0CC;"><a href="index.php?mod=comedy">phim hài hước </a>, <a href="index.php?mod=phimle">phim lẻ</a></span></b></p>
        </div>
    </div>
    <video style="margin-top:20px;" width="640px" height="400px" controls="controls">
            <source src="<?php echo $row["video"] ?>" />
    </video>
    <div style="background:#1D1D1D;width:660px;margin-top:20px;">
    	<p style="color:#FF0;padding:10px 0 0 5px;"><b>NỘI DUNG PHIM:</b></p><br />
        <div style="padding:0 5px;">
        	<p style="line-height:20px;text-indent:20px;">Cậu bé Tim 7 tuổi vốn dĩ đang có một cuộc sống rất ấm êm và đầy màu hồng thì bỗng dưng phải đối mặt với “biến cố” lớn trong đời: có một đứa em trai và phải học cách làm anh. Mọi khi cậu luôn là tâm điểm trong mắt bố mẹ, nhưng giờ đây Tim phải chấp nhận san sẻ tình yêu thương. Chưa hết, đứa em trai quái chiêu của cậu còn “thống trị” toàn bộ căn nhà, bắt nạt Tim và luôn khóc thét trước mặt bố mẹ để dành quyền được dỗ dành.</p>
            <p style="line-height:20px;text-indent:20px;">Thế nhưng, em bé không còn “bé” như họ tưởng, “Nhóc trùm” nói giọng người lớn và cư xử như một dân anh chị, nhân vật bí ẩn bên trong lốt em bé này đến từ đâu và với mục đích gì?</p>
        </div>
    </div>
    <br />
    <form action="" method="post">
    	<label>Name :</label> <br /><input type="text" name="name" /><br />
        <br />
        <label">Message :<br /> <textarea cols="123" rows="5" name="message"></textarea></label><br />
        <input type="submit" name="comment" value="Comment"/>
    </form>
    <?php
		include "comment.php";
	?>
</body>
</html>

