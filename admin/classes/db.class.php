<?php
class db{
	public $conn = null;
	public $n;//số dòng
	function __construct()
	{
		$this->conn = new PDO("mysql:host=localhost; dbname=movie", "root", "");
		//("mysql:host=mysql.hostinger.vn; dbname=u972009132_movie", "u972009132_hoai", "123456");
		//("mysql:host=localhost; dbname=id3097805_movie", "id3097805_hoaibao", "123456")
		//("mysql:host=localhost; dbname=id3097607_movie", "id3097607_minhhoai", "123456")
		$this->conn->query("set names 'utf8' ");	
	}
	
	function selectQuery($sql, $arr= array())
	{
		$stm = $this->conn->prepare($sql);
		$stm->execute($arr);
		$this->n = $stm->rowCount();
		return $stm->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function updateQuery($sql, $arr= array())
	{
		$stm = $this->conn->prepare($sql);
		$stm->execute($arr);
		$this->n = $stm->rowCount();
		return $this->n;
	}
	
	
}
//--------
