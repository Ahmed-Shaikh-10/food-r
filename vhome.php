<?php
include("vlock.php");
?>
<!DOCTYPE html>
<html>
<head>
<title><?php
echo "Welcome ".$data=$row['v_name' OR 'v_cont' OR 'v_mail'];
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
        padding: 20px;
    }
    /* Dono cards ko ek line me center me lane ke liye container */
    .dashboard-wrapper {
        display: flex;
        flex-direction: row;
        gap: 25px;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        width: 100%;
        max-width: 800px;
    }
    .dashboard-card {
        background: white;
        padding: 35px 30px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        flex: 1;
        min-width: 300px;
        max-width: 400px;
        text-align: center;
    }
    h1 {
        font-size: 24px;
        color: #2c3e50;
        margin-bottom: 15px;
    }
    .welcome h2 {
        font-size: 18px;
        color: #555;
        margin-bottom: 25px;
    }
    .welcome h2 span {
        color: #27ae60;
        font-weight: bold;
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
        transition: 0.3s;
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

<div class="dashboard-wrapper">
    <div class="dashboard-card">
        <h1>Viewer Dashboard</h1>

        <div class="welcome">
            <?php
            echo "<h2>Welcome, <span>".$row['v_name']."</span></h2>";
            ?>
        </div>

        <button class="btn"><a href="view.php">Recipe</a></button>
        <button class="btn logout"><a href="vlogout.php">logout</a></button>
    </div>
</div>

</body>
</html>