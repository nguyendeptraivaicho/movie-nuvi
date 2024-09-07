<?php
class user extends db
{
	function listuser()
	{
		return $this->selectQuery("select * from user ");
	}
	
	function xoauser($id)
	{
		$sql="delete  from user where UserID= :ID  ";
		$arr=array(":ID"=>$id);
		return $this->updateQuery($sql,$arr);
	}
	/*function kiemtrabinhluanuser($id)
	{
		
		$sql="select * from user inner join ykienbandoc on user.TenDangNhap=ykienbandoc.User where user.TenDangNhap=:ID";
		$arr=array(":ID"=>$id);
		return $this->selectQuery($sql,$arr);
	}*/
	
}