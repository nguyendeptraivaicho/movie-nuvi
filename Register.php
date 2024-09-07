<?php 
require ("SimpleTut/Connections/Connections.php");
include "check.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="SimpleTut/SimpleTut-CSS/Master.css" rel="stylesheet" type="text/css" />
<link href="SimpleTut/SimpleTut-CSS/Menu.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
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
       	  <form action="" method="post" name="RegisterForm" id="RegisterForm" >
            	<div class="FormElement" >
            	 	<input name="First_Name" type="text" required="required" class="TField" id="First_Name" placeholder="First Name" />
       	  	  	</div>
                <div class="FormElement" >
                 	<input name="Last_Name" type="text" required="required" class="TField" id="Last_Name" placeholder="Last Name" />
                </div>
              	<div class="FormElement" >
                 	<input name="Username" type="username" required="required" class="TField" id="Username" placeholder="Username" />
                </div>
                <div class="FormElement" >
                	<input name="Password" type="password" required="required" class="TField" id="Password" placeholder="Password" />
                </div>
                 <div class="FormElement" >
                	<input name="Repass" type="password" required="required" class="TField" id="Repass" placeholder="Repass" />
                </div>
                <div class="FormElement" >
                	<input name="Register" type="submit" class="button" id="Register" value="Register" />
                </div>
          </form>
        </div>
    	<div class="Footer" ></div>
    </div>
    <?php
if(isset($_POST["Register"]))
{
	$fname = $_POST["First_Name"];
	$lname = $_POST["Last_Name"];
	$username = $_POST["Username"];
	$pass = $_POST["Password"];
	$repass = $_POST["Repass"];
	if(strlen($username)<6)
	{
		?>
		<script type="text/javascript" language="javascript">
			alert ("Username phai lon hon 6 phan tu");
		</script>	
	<?php 
	}
	else if(strlen($pass)<8)
	{
		?>
		<script type="text/javascript" language="javascript">
			alert ("Pass phai lon hon 8 phan tu");
		</script>	
	<?php 
	}
	else if(strlen($fname)<4)
	{
		?>
		<script type="text/javascript" language="javascript">
			alert ("Ho phai lon hon 4 phan tu");
		</script>	
	<?php 
	}
	else if(strlen($lname)<4)
	{
		?>
		<script type="text/javascript" language="javascript">
			alert ("Ten phai lon hon 4 phan tu");
		</script>	
	<?php 
	}
	else if($pass!=$repass)
	{
		?>
		<script type="text/javascript" language="javascript">
			alert ("Xin nhập đúng pass và repass");
		</script>	
	<?php 
	}
	else
	{
		session_start();
		$fname = $_POST['First_Name'];
		$lname = $_POST['Last_Name'];
		$username = $_POST['Username'];
		$pass = $_POST['Password'];
		
		$sql = $con->query("INSERT INTO user (FName, LName, Username, Password)Values('{$fname}', '{$lname}', '{$username}', '{$pass}')");
		
		header('Location: Login.php');
	}
}
?>
</body>
</html>