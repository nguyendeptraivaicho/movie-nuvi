<?php
class loaiphim extends db
{
	function listloaiphim()
	{
		return $this->selectQuery("select * from `loaiphim` ");	
	}	
	
	function themloaiphim($id,$name)
	{
		$sql="insert into `loaiphim`(maloai, tenloai)
			value(:ID, :NAME)";
			
		$arr=array(":ID"=>$id,":NAME"=>$name);
		return $this->updateQuery($sql,$arr);
	}
	
	function xoaloaiphim($id)
	{
		$sql="delete  from `loaiphim` where maloai= :ID  ";
		$arr=array(":ID"=>$id);
		return $this->updateQuery($sql,$arr);
	}
	
	function sualoaiphim($id,$name)
	{
		$sql="update `loaiphim` set tenloai = :NAME where maloai = :ID";
		
		$arr=array(":ID"=>$id,":NAME"=>$name);
		return $this->updateQuery($sql,$arr);
		
	}
	
	function kiemtramatl($id)
	{
		$sql="select * from theloai where MaTL=:ID";
		$arr=array(":ID"=>$id);
		return $this->selectQuery($sql,$arr);
	}
	
	/*function kiemtratintuctrongloai($id)
	{
		
		$sql="select * from theloai inner join tintuc on theloai.MaTL=tintuc.MaTL where theloai.MaTL=:ID";
		$arr=array(":ID"=>$id);
		return $this->selectQuery($sql,$arr);
	}*/
	
	function searchloai($value)
	{
		return $this->selectQuery("select * from category where cat_id like $value");
	}
	function searchBook($value)
	{
		$sql="select book_id, book_name from book where book_name like :TS ";
		$arr = array(":TS"=>$value);
		return $this->selectQuery($sql, $arr);	
	}
	
}
//------------------------------------------------------------------------------------
?>