<?php require 'SimpleTut/Connections/Connections.php';
include "check.php";
 ?>
<?php
session_start();
if(isset($_SESSION["UserID"])){
}else{
	header('Location: Login.php');
}
?>
<?php
		$User = $_SESSION["UserID"];
		$result = $con->query("Select * from user where UserID='$User'");
		$row = $result->fetch_array(MYSQLI_BOTH);
		$_SESSION["Firstname"] = $row['Fname'];
		$_SESSION["Lastname"] = $row['Lname'];
		$_SESSION["Username"] = $row['Username'];
		$_SESSION["PW"] = $row['Password'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="SimpleTut/SimpleTut-CSS/Master.css" rel="stylesheet" type="text/css" />
<link href="SimpleTut/SimpleTut-CSS/Menu.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UpdateAcount</title>
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
        	<form action="" method="post" name="form1" >
            	<div class="FormElement" >
            	 	<input name="First_Name" type="text" required="required" class="TField" id="First_Name" value="<?php echo $_SESSION["Firstname"]; ?>"/>
       	  	  	</div>
                <div class="FormElement" >
                 	<input name="Last_Name" type="text" required="required" class="TField" id="Last_Name" value="<?php echo $_SESSION["Lastname"]; ?>"/>
                </div>
              	<div class="FormElement" >
                 	<input name="Username" type="username" required="required" class="TField" id="Username" value="<?php echo $_SESSION["Username"]; ?>"/>
                </div>
                <div class="FormElement" >
                	<input name="Password" type="password" required="required" class="TField" id="Password" value="<?php echo $_SESSION["PW"]; ?>"/>
                </div>
                <div class="FormElement" >
                	<input name="Repass" type="password" required="required" class="TField" id="Repass" value"Repass" />
                </div>
                <div class="FormElement" >
                	<input name="Update" type="submit" class="button" id="Update" value="Update Info" />
                </div>
          </form>
        </div>
    	<div class="Footer" ></div>
    </div>
</body>
</html>
<?php
if(isset($_POST['Update']))
{
	$UpdateFname = $_POST['First_Name'];
	$UpdateLname = $_POST['Last_Name'];
	$UpdateUsername = $_POST['Username'];
	$UpdatePW = $_POST['Password'];
	$repass = $_POST['Repass'];
	if(strlen($UpdateUsername)<6)
	{
		?>
		<script type="text/javascript" language="javascript">
			alert ("Username phai lon hon 6 phan tu");
		</script>	
	<?php 
	}
	else if(strlen($UpdatePW)<8)
	{
		?>
		<script type="text/javascript" language="javascript">
			alert ("Pass phai lon hon 8 phan tu");
		</script>	
	<?php 
	}
	else if(strlen($UpdateFname)<4)
	{
		?>
		<script type="text/javascript" language="javascript">
			alert ("Ho phai lon hon 4 phan tu");
		</script>	
	<?php 
	}
	else if(strlen($UpdateLname)<4)
	{
		?>
		<script type="text/javascript" language="javascript">
			alert ("Ten phai lon hon 4 phan tu");
		</script>	
	<?php 
	}
	else if($UpdatePW!=$repass)
	{
		?>
		<script type="text/javascript" language="javascript">
			alert ("Xin nhập đúng pass và repass");
		</script>	
	<?php 
	}
	else
	{
		$UpdateFname = $_POST['First_Name'];
		$UpdateLname = $_POST['Last_Name'];
		$UpdateUsername = $_POST['Username'];
		$UpdatePW = $_POST['Password'];
		
		$sql = $con->query("UPDATE user SET Fname='{$UpdateFname}', Lname='{$UpdateLname}', Username='{$UpdateUsername}', Password='{$UpdatePW}' where UserID=$User");
		header('Location: UpdateAccount.php');
	}
}
?>