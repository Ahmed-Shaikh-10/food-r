<!DOCTYPE HTML>
<html>
<?php include("alock.php");?>
<head>
<title>Registration</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">
// from validation rules 
$(document).ready(function(){
	        $("#reg").validate({
				 rules:{
					 name:"required",
					 uppdf:"required",
				 },  type:"required",
                messages:{
                   name:"Plaese enter full name",
				   type:"Please select type of recipe",
				   uppdf:"Please enter Pdf",
                        
			},		
                        submitHandler: function(form){
                          alert("Data is correct.!!");
                                form.submit();
						}
});
});	
</script>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
        background-image: url('.jpg'); 
        background-repeat: no-repeat; 
        background-size: cover; 
        background-position: center; 
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f4f7f6;
    }
    .card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 420px;
        text-align: center;
    }
    form p {
        margin-bottom: 15px;
        font-weight: bold;
    }
    input[type="text"], select, input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    button, input[type="reset"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        background-color: #27ae60;
        color: white;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    }
    input[type="reset"] {
        background-color: #95a5a6;
    }
    .btn-back {
        background-color: #3498db;
        margin-top: 10px;
    }
    .btn-back a {
        color: white;
        text-decoration: none;
        display: block;
    }
    label.error {
        color: red;
        font-size: 12px;
        display: block;
        margin-top: -10px;
        margin-bottom: 10px;
    }
</style>
</head>

<body>
<div class="card">
    <form id="reg" action="ari.php" method="POST" enctype="multipart/form-data">
        <p><i style="color:black;">ENTER DETAILS BELOW</i></p>
        
        Recipe Name:<br>
        <input type="text" name="name" id="name" value="" placeholder="enter recipe name"><br>
        
        Select type:<br>
        <select name="type" id="type" required>
            <option value="" disabled selected>Select Recipe Type</option>
            <option value="veg">veg</option>
            <option value="non-veg">non-veg</option>
        </select><br>
        
        select pdf:<br>
        <input type="file" name="uppdf" id="uppdf" value="" placeholder="Enter pdf"><br>

        <button type="submit">SUBMIT</button>
        <input type="reset" name="reset" value="refresh">
    </form>
    
    <button class="btn-back"><a href="ahome.php">back</a></button>
</div>
</body>
</html>