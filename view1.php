<?php
include("config.php");

$r = $_GET['r'];

$qry = mysql_query("SELECT * FROM recipe WHERE r_recipe='$r'");

while($row = mysql_fetch_array($qry))
{
?>
<!DOCTYPE html>
<html>
<head>
<title>View Recipe</title>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
        background-image: url('.png'); 
        background-repeat: no-repeat; 
        background-size: cover; 
        background-position: center; 
        background-attachment: fixed;
        background-color: #f4f7f6;
        padding: 20px;
        display: flex;
        justify-content: center;
    }
    .view-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 900px;
        text-align: center;
    }
    h1 {
        margin-bottom: 15px;
        color: #2c3e50;
        text-transform: capitalize;
    }
    iframe {
        border: 1px solid #ddd;
        border-radius: 6px;
        margin-bottom: 15px;
    }
    .btn-back {
        display: inline-block;
        padding: 10px 25px;
        background-color: #3498db;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn-back a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }
</style>
</head>

<body>
<div class="view-card">
    <form action="" method="POST">
        <h1><?php echo "recipe"; ?></h1>

        <iframe src="pdf/<?php echo $r;?>" height="600" width="100%"></iframe><br>

        <button type="button" class="btn-back"><a href="vhome.php">Back</a></button>
    </form>
</div>
</body>
</html>
<?php
}
?>