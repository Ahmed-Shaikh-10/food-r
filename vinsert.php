<?php 
include("config.php");
$path = "photo/";
$valid_formats =  array ("jpg" , "png" , "gif" , "bmp" , "JPG");
     if ($_SERVER['REQUEST_METHOD'] == "POST")
       {
	      $time=time();
		  $n = $_POST ['name'];
		  $c = $_POST ['cont'];
		  $m = $_POST ['mail'];
		  $p = md5($_POST ['pass']);
		  $actual_image_name = $_FILES['upimg']['name'];
		  $reimg  = $time.$actual_image_name;
		  $size = $_FILES['upimg']['size'];
		  $tmp = $_FILES['upimg']['tmp_name'];
		  $ext = explode(".",$actual_image_name);
?>
<!DOCTYPE html>
<html>
<head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f7f6;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }
    .status-card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 16px rgba(0,0,0,0.1);
        text-align: center;
        max-width: 400px;
        width: 100%;
    }
    .error {
        color: #e74c3c;
        font-size: 16px;
        font-weight: bold;
    }
    .debug-info {
        background: #f8f9fa;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 15px;
        font-size: 13px;
    }
</style>
</head>
<body>

<div class="status-card">
    <div class="debug-info">
        <?php print_r($ext); ?>
    </div>

    <?php
    if(in_array($ext[1],$valid_formats))
    {
       if(move_uploaded_file($tmp, $path.$reimg))
       {
         $qryt = mysql_query("INSERT INTO a_food.view (v_name,v_cont,v_mail,v_pass,v_img )VALUES ('$n','$c','$m','$p','$reimg')");
           if($qryt == true)
           {
            header("vlogin.php");
           }
         }
        else 
        {
            echo "<div class='error'>not</div>";
        }
    }
    else
    {
        echo "<div class='error'>invalid format</div>";
    }
}
?>						
</div>

</body>
</html>