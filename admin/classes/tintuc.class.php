<?php
class tintuc extends db
{
	function listtintuc()
	{
		return $this->selectQuery("SELECT * FROM `news` ");	
	}	
	function themtintuc($title,$date,$summary,$info1,$info2,$hinh,$info3,$info4)
	{
		$sql="insert into `news` ( `title`,`date`, `summary`, `info1`, `info2` , `image` , `info3` ,`info4`)
			values ( :TITLE,:DATE,:SUMMARY,:INFO1,:INFO2,:IMAGE,:INFO3,:INFO4)";
		$arr=array(":TITLE"=>$title,":DATE"=>$date,":SUMMARY"=>$summary,":INFO1"=>$info1,":INFO2"=>$info2,":IMAGE"=>$hinh,":INFO3"=>$info3,":INFO4"=>$info4);
		
		echo $sql; 
		echo "<pre>";
	
	//	print_r($arr); exit;
		return $this->updateQuery($sql,$arr);
	}
	
	function xoatintuc($id)
	{
		$sql="delete  from news where idtintuc= :IDTINTUC  ";
		$arr=array(":IDTINTUC"=>$id);
		return $this->updateQuery($sql,$arr);
	}

	function suatintuc($id,$title,$date,$summary,$info1,$info2,$hinh,$info3,$info4)
	{
		$sql="update `news` set `title` = :TITLE,`date` = :DATE,`summary` = :SUMMARY,`info1` = :INFO1,`info2` = :INFO2,`image` = :IMAGE,`info3` = :INFO3,`info4` = :INFO4 where `idtintuc` = :IDTINTUC";
		$arr=array(":TITLE"=>$title,":DATE"=>$date,":SUMMARY"=>$summary,":INFO1"=>$info1,":INFO2"=>$info2,":IMAGE"=>$hinh,":INFO3"=>$info3,":INFO4"=>$info4,":IDTINTUC" =>$id);
		return $this->updateQuery($sql,$arr);
	}
	
	
	function phantrang($id)
	{
		$s=$id*5;
		$sql="SELECT news.idtintuc, news.title, news.date, news.summary, news.info1,news.info2,news.image,news.info3,news.info4 FROM news
					ORDER BY news.date DESC LIMIT $s,5";
		return $this->selectQuery($sql);
	}
	
	function kiemtraidaction($id)
	{
		$sql="select * from phim where id=:ID";
		$arr=array(":ID"=>$id);
		return $this->selectQuery($sql,$arr);
	}
	
	/*function kiemtrabinhluantrongtintuc($id)
	{
		
		$sql="select * from tintuc inner join ykienbandoc on tintuc.MaTT=ykienbandoc.MaTT where tintuc.MaTT=:ID";
		$arr=array(":ID"=>$id);
		return $this->selectQuery($sql,$arr);
	}*/	
}
