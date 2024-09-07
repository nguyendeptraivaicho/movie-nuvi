<?php require 'SimpleTut/Connections/Connections.php'; ?>
<?php
session_start();
if(isset($_SESSION["UserID"])){
}else{
	header('Location: Login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="SimpleTut/SimpleTut-CSS/Master.css" rel="stylesheet" type="text/css" />
<link href="SimpleTut/SimpleTut-CSS/Menu.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account</title>
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
    	<div class="RightBody" ><br /> Your Account<br/>
       	 	<br/><?php echo $_SESSION["UserID"]; ?>
        </div>
    	<div class="Footer" ></div>
    </div>
</body>
</html>