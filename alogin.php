<?php
session_start();

include("config.php");
if(isset($_SESSION['login_user']))
{
	header("location:ahome.php");
}
  if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$myusername=$_POST ['username'];$mypassword=$_POST ['password'];$password=md5($mypassword);$sql="SELECT a_id FROM admin WHERE a_name='$myusername' OR a_mail='$myusername' 
	OR a_cont='$myusername'
	AND a_pass='$password'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	
	
	$count=mysql_num_rows($result);


	if($count==1)
		
	
	{
		$_SESSION['login_user']=$myusername;
		header("location:ahome.php");
	}
	else
	{
		echo "<div style='color:red; text-align:center; padding:10px;'>your login name or password is invalid</div>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">
function myfunction()
{
 var x = document.getElementById("password");	
 if (x.type === "password")
 {
	 x.type = "text";
 }
  else{
	     x.type = "password";
  }
}
</script>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
        background-image: url('lg.jpg'); 
        background-repeat: no-repeat;
        background-size: cover; 
        background-position: center; 
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .card-container {
        background: rgba(255, 255, 255, 0.95);
        padding: 35px 30px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.2);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }
    h2 {
        color: #ff0000;
        margin-bottom: 20px;
        font-size: 22px;
    }
    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        outline: none;
    }
    .checkbox-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-bottom: 15px;
        color: #333;
        font-size: 14px;
    }
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: #ff0000;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #cc0000;
    }
</style>
</head>

<body>
<div class="card-container">
    <form action="" method="POST">
        <h2>Enter your name or password:</h2>
        
        <input type="text" id="username" name="username" value="" placeholder="Enter Username or Email or Contact">

        <input type="password" id="password" name="password" value="" placeholder="Enter Password">
        
        <div class="checkbox-container">
            <input type="checkbox" onclick="myfunction()">
            <label>show password</label>
        </div>

        <input type="submit" value="log in">
    </form>
</div>
</body>
</html>