<?php
class quocgia extends db
{
	function listquocgia()
	{
		return $this->selectQuery("select * from `quoc gia` ");	
	}	
	
	function themquocgia2($id2,$name2)
	{
		$sql="insert into `quoc gia`(macountry, tencountry)
			value(:ID, :NAME)";
			
		$arr=array(":ID"=>$id2,":NAME"=>$name2);
		return $this->updateQuery($sql,$arr);
	}
	
	function xoaquocgia2($id2)
	{
		$sql="delete  from quoc gia where matl= :ID  ";
		$arr=array(":ID"=>$id2);
		return $this->updateQuery($sql,$arr);
	}
	
	function suaquocgia2($id2,$name2)
	{
		$sql="update theloai set tentl = :NAME where matl = :ID";
		
		$arr=array(":ID"=>$id2,":NAME"=>$name2);
		return $this->updateQuery($sql,$arr);
		
	}
	
	function kiemtramatl2($id2)
	{
		$sql="select * from quoc gia where macountry=:ID";
		$arr=array(":ID"=>$id2);
		return $this->selectQuery($sql,$arr);
	}
	
	/*function kiemtratintuctrongloai($id)
	{
		
		$sql="select * from theloai inner join tintuc on theloai.MaTL=tintuc.MaTL where theloai.MaTL=:ID";
		$arr=array(":ID"=>$id);
		return $this->selectQuery($sql,$arr);
	}*/
	

	
}
?>