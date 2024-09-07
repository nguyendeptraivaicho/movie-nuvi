<?php 
class userphim extends db
{
	function listuserphim($id)
	{
		$sql="select * from `userphim` where UserID = :id ";
		$arr=array(":id"=>$id);
		return $this->selectQuery($sql,$arr);	
	}
	function themuserphim($iduser,$idphim)
	{
		$sql="INSERT INTO `userphim` (`UserID`,`id`) values (:iduser,:idphim)";
		$arr=array(":iduser"=>$iduser,":idphim"=>$idphim);
		return $this->updateQuery($sql,$arr);
		
	}
	function xoauserphim($idup)
	{
		$sql="delete  from `userphim` where IDUP = :idup  ";
		$arr=array(":idup"=>$idup);
		return $this->updateQuery($sql,$arr);
	}
}
?>