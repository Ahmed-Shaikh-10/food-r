<?php 
include("config.php");
$path = "pdf/";
$valid_formats =  array ("pdf" , "PDF");
     if ($_SERVER['REQUEST_METHOD'] == "POST")
       {
	      $time=time();
		  $n = $_POST['name'];
		  $t = $_POST['type'];
		  $actual_pdf_name = $_FILES['uppdf']['name'];
		  $repdf  = $time.$actual_pdf_name;
		  $size = $_FILES['uppdf']['size'];
		  $tmp = $_FILES['uppdf']['tmp_name'];
		  $ext = explode(".",$actual_pdf_name);?>

<!DOCTYPE html>
<html>
<head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f7f6;
        margin: 0;
        padding: 20px;
    }
    .container {
        max-width: 900px;
        margin: 0 auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        text-align: center;
    }
    .debug-box {
        background-color: #eef9ff;
        border: 1px solid #bce8f1;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 15px;
        display: inline-block;
    }
    .msg-error {
        color: #d9534f;
        font-weight: bold;
        padding: 10px;
    }
    iframe {
        border: 1px solid #ddd;
        border-radius: 8px;
        margin-top: 15px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="debug-box">
        <?php print_r($ext); ?>
    </div>
    
    <?php
    if(in_array($ext[1],$valid_formats))
    {
       if(move_uploaded_file($tmp, $path.$repdf))
       {
         $qryt = mysql_query("INSERT INTO a_food.recipe (r_name,r_type,r_recipe )VALUES ('$n','$t','$repdf')");
           ?>
           <iframe src="pdf/<?php echo $repdf;?>" height="700" width="100%"></iframe>
           <?php
     }
     else 
      {
        echo "<div class='msg-error'>not</div>";
      }
    }
    else
    {
        echo "<div class='msg-error'>invalid format</div>";
    }
}
?>						
</div>
</body>
</html>