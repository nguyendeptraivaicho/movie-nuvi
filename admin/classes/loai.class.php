<?php
class loai extends db
{
	function listloai()
	{
		return $this->selectQuery("select * from theloai ");	
	}	
	
	function themloai($id,$name)
	{
		$sql="insert into theloai(matl, tentl)
			value(:ID, :NAME)";
			
		$arr=array(":ID"=>$id,":NAME"=>$name);
		return $this->updateQuery($sql,$arr);
	}
	
	function xoaloai($id)
	{
		$sql="delete  from theloai where matl= :ID  ";
		$arr=array(":ID"=>$id);
		return $this->updateQuery($sql,$arr);
	}
	
	function sualoai($id,$name)
	{
		$sql="update theloai set tentl = :NAME where matl = :ID";
		
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