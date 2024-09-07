<?php require 'SimpleTut/Connections/Connections.php'; 
include "check.php";?>
<?php
	if(isset($_POST['Login'])){
		
		$Username = $_POST['Username'];
		$PW = $_POST['Password'];
		
		$result = $con->query("Select * from user where Username='$Username' AND Password='$PW'");
		
		$row = mysqli_fetch_array($result,MYSQLI_BOTH);
		session_start();
		
		$_SESSION["UserID"] = $row['UserID'];
		$_SESSION["Username"] = $Username;
		$_SESSION["Password"] = $PW;
		
		header('Location: index.php');
	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="SimpleTut/SimpleTut-CSS/Master.css" rel="stylesheet" type="text/css" />
<link href="SimpleTut/SimpleTut-CSS/Menu.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
	<div class="Container" >
    	<div class="Header" ></div>
        <div class="Menu" >
        <div id="Menu">
             <nav>
                <ul class="cssmenu">
                    
                    <li><a href="Register.php">Register</a></li>	
                            
                    <li><a href="Login.php">Login</a></li>		
                    
                </ul>
             </nav>
</div>
        </div>
    	<div class="LeftBody" ></div>
    	<div class="RightBody" >
       	  <form name="form1" method="post" action="" >
         	 <div class="FormElement" >
                 	<input name="Username" type="username" required="required" class="TField" id="Username" placeholder="Username" />
                </div>
                <div class="FormElement" >
                	<input name="Password" type="password" required="required" class="TField" id="Password" placeholder="Password" />
                </div>
                <div class="FormElement" >
                	<input name="Login" type="submit" class="button" id="Login" value="Login" />
                </div>
          </form>
        </div>
    	<div class="Footer" ></div>
    </div>
</body>
</html>