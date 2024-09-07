<?php
class binhluan extends db
{
	function listbinhluan()
	{
		return $this->selectQuery("select * from ykienbandoc ");	
	}
	
	function binhluanmoinhat()
	{
		return $this->selectQuery("select * from ykienbandoc order by ngaybl desc");
	}
	
	function xoabinhluan($id)
	{
		$sql="delete  from ykienbandoc where mabl= :ID  ";
		$arr=array(":ID"=>$id);
		return $this->updateQuery($sql,$arr);
	}
	function phantrang($id)
	{
		$s=($id-1)*5;
		$sql="SELECT * FROM ykienbandoc
					ORDER BY NgayBL DESC LIMIT $s,5";
		return $this->selectQuery($sql);
	}
}
?>
