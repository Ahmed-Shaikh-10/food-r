<?php
include("alock.php");
?>
<!DOCTYPE html>
<html>
<head>
<title><?php
echo "Welcome ".$data=$row['a_name' OR 'a_cont' OR 'a_mail'];
?></title>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
        background-color: #f4f7f6;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .dashboard-card {
        background: white;
        padding: 40px 30px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 420px;
        text-align: center;
    }
    .logo {
        font-size: 24px;
        font-weight: bold;
        color: #e67e22;
        margin-bottom: 10px;
        text-transform: uppercase;
    }
    h1 {
        font-size: 22px;
        color: #2c3e50;
        margin-bottom: 20px;
    }
    .welcome h2 {
        font-size: 18px;
        color: #555;
        margin-bottom: 25px;
    }
    .welcome h2 span {
        color: #e67e22;
    }
    .btn {
        display: block;
        width: 100%;
        padding: 12px;
        margin-bottom: 12px;
        background-color: #3498db;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }
    .btn.logout {
        background-color: #e74c3c;
    }
    .btn a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        display: block;
    }
    .btn:hover {
        opacity: 0.9;
    }
</style>
</head>

<body>

<div class="dashboard-card">
    <div class="logo">Food Recipes</div>

    <h1>Admin Dashboard</h1>

    <div class="welcome">
        <?php
        echo "<h2>Welcome, <span>".$row['a_name']."</span></h2>";
        ?>
    </div>

    <button class="btn"><a href="ar.php">Recipe</a></button>
    <button class="btn logout"><a href="alogout.php">logout</a></button>
</div>

</body>
</html>