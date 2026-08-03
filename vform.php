<!DOCTYPE HTML>
<html><?php //include("alock.php");?>
<head>
<title>Registration</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">
// form validation rules 
$(document).ready(function(){
    $("#reg").validate({
        rules:{
            name:"required",
            upimg:"required",
            cont:{
                required:true,
                minlength:10,
                maxlength:10,
                number:true
            },
            mail:{
                required:true,
                email:true
            },
            pass:"required"
        },
        messages:{
            name:"Please enter full name",
            upimg:"Please enter Image",
            cont:{
                required:"Please enter contact",
                minlength:"contact should be 10 digits",
                maxlength:"contact should be 10 digits",
                number:"Please enter valid no"
            },
            email:{
                required:"please enter email",
                email:"please enter valid email"
            },
            pass:"please enter password"
        },		
        submitHandler: function(form){
            alert("Data is correct.!!");
            form.submit();
        }
    });
});		

function myfunction()
{
 var x = document.getElementById("pass");	
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
        background-image: url('a.jpg'); 
        background-repeat: no-repeat; 
        background-size: cover; 
        background-position: center; 
        background-attachment: fixed;
        background-color: #f4f7f6;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }
    .card-container {
        background: rgba(255, 255, 255, 0.95);
        padding: 35px 30px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }
    .card-container p {
        margin-bottom: 20px;
        font-weight: bold;
        color: #2c3e50;
    }
    input[type="text"],
    input[type="number"],
    input[type="email"],
    input[type="file"],
    input[type="password"] {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        outline: none;
        font-size: 14px;
    }
    .checkbox-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-bottom: 15px;
        font-size: 14px;
        color: #333;
    }
    button[type="submit"],
    input[type="reset"],
    .btn-login {
        width: 100%;
        padding: 11px;
        margin-bottom: 8px;
        border: none;
        border-radius: 6px;
        font-weight: bold;
        font-size: 15px;
        cursor: pointer;
        transition: 0.3s;
    }
    button[type="submit"] {
        background-color: #27ae60;
        color: white;
    }
    button[type="submit"]:hover {
        background-color: #219150;
    }
    input[type="reset"] {
        background-color: #95a5a6;
        color: white;
    }
    input[type="reset"]:hover {
        background-color: #7f8c8d;
    }
    .btn-login {
        background-color: #3498db;
    }
    .btn-login a {
        color: white;
        text-decoration: none;
        display: block;
    }
    .btn-login:hover {
        background-color: #2980b9;
    }
    label.error {
        color: #e74c3c;
        font-size: 12px;
        display: block;
        margin-top: -8px;
        margin-bottom: 10px;
        text-align: left;
    }
</style>
</head>

<body>

<div class="card-container">
    <form id="reg" action="vinsert.php" method="POST" enctype="multipart/form-data">
        <p>ENTER DETAILS BELOW</p>

        <input type="text" name="name" id="name" value="" placeholder="enter name">
        <input type="number" name="cont" id="cont" value="" placeholder="users contact">
        <input type="email" name="mail" id="mail" value="" placeholder="Enter Mail">
        <input type="file" name="upimg" id="img" value="" placeholder="Enter Img">
        <input type="password" name="pass" id="pass" value="" placeholder="enter Password">
        
        <div class="checkbox-container">
            <input type="checkbox" onclick="myfunction()">
            <span>show password</span>
        </div>

        <button type="submit">SUBMIT</button>
        <input type="reset" name="reset" value="refresh">
    </form>
    
    <button class="btn-login"><a href="vlogin.php">login</a></button>
</div>

</body>
</html>