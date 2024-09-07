<?php
session_start();
	function check ()
	{
		if(isset($_SESSION["UserID"]) && isset($_SESSION["Username"]) && isset($_SESSION["Password"]))
		{
			return true;
		}
		else
		{
			return false;
		}	
	}
?>