<?php
class movie extends db
{
	function listmovie()
	{
		return $this->selectQuery("SELECT * FROM `phim` ");	
	}	
	function listmovieyt($idphim)
	{
		$sql="select * from `phim`  where id = :idphim ";
		$arr=array(":idphim"=>$idphim);
		return $this->selectQuery($sql,$arr);		
	}
	function themmovie($namephim,$info,$hinh,$rate,$comment,$release,$actor,$macountry,$company,$matl,$video,$maloai,$summary)
	{
		$sql="insert into `phim` (`namephim`, `info`,`image`, `rate`, `comment`, `release`,`actor`,`macountry`,`company`,`matl`,`video`,`maloai`,`summary`)
			values ( :NAMEPHIM, :INFO,:IMAGE,:RATE,:COMMENT,:RELEASE,:ACTOR,:MACOUNTRY,:COMPANY,:MATL,:VIDEO,:MALOAI,:SUMMARY)";//bỏ $id,`id`,:ID 
		$arr=array(":NAMEPHIM"=>$namephim,":INFO"=>$info,":IMAGE"=>$hinh,":RATE"=>$rate,":COMMENT"=>$comment,":RELEASE"=>$release,":ACTOR"=>$actor,":MACOUNTRY"=>$macountry,":COMPANY"=>$company,":MATL"=>$matl,":VIDEO"=>$video,":MALOAI"=>$maloai,":SUMMARY"=>$summary);
		
		echo $sql; 
		echo "<pre>";
	
	//	print_r($arr); exit;
		return $this->updateQuery($sql,$arr);
	}
	
	function xoamovie($id)
	{
		$sql="delete  from phim where id= :ID  ";
		$arr=array(":ID"=>$id);
		return $this->updateQuery($sql,$arr);
	}
	function searchmovie($value)
	{
		$sql="select * from phim where namephim like :N ";
		$arr = array(":N"=>$value);
		return $this->selectQuery($sql, $arr);	
	}
	function suamovie($id,$namephim,$info,$hinh,$rate,$comment,$release,$actor,$macountry,$company,$matl,$video,$maloai,$summary)
	{
		$sql="update `phim` set `namephim` = :NAMEPHIM,`info` = :INFO,`video` = :VIDEO,`image` = :IMAGE,`rate` = :RATE,`comment` = :COMMENT,`release` = :RELEASE,`actor` = :ACTOR,`macountry` = :MACOUNTRY,`company` = :COMPANY,`summary` = :SUMMARY,`maloai` = :MALOAI,`matl` = :MATL  where `id` = :ID";
		
		$arr=array(":ID"=>$id,":NAMEPHIM"=>$namephim,":INFO"=>$info,":VIDEO"=>$video,":IMAGE"=>$hinh,":RATE"=>$rate,":COMMENT"=>$comment,":RELEASE"=>$release,":ACTOR"=>$actor,":MACOUNTRY"=>$macountry,":COMPANY"=>$company,":SUMMARY"=>$summary,":MALOAI"=>$maloai,":MATL"=>$matl);
		
		return $this->updateQuery($sql,$arr);
		
	}
	
	function phantrang($id)
	{
		$s=$id*5;
		$sql="SELECT phim.namephim, phim.info, phim.id, phim.release, phim.video,phim.image,phim.rate,phim.comment,phim.actor,phim.macountry,phim.company,phim.matl,phim.maloai,phim.summary FROM phim
					ORDER BY phim.release DESC LIMIT $s,5";
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
