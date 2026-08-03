<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:vlogin.php");
}
include("config.php");
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select * from view where v_name='$user_check' OR v_cont='$user_check'
 OR v_mail='$user_check'");
$row=mysql_fetch_array($ses_sql);
?>
<style>
    .user-profile-bar {
        background: #ffffff;
        padding: 30px 25px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        width: 100%;
        max-width: 320px;
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .user-profile-bar p {
        margin: 8px 0;
        color: #444;
        font-size: 14px;
        text-align: left;
    }
    .user-profile-bar img {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        object-fit: cover;
        margin-top: 15px;
        border: 3px solid #3498db;
    }
</style>

<div class="user-profile-bar">
    <?php
    echo "<p><strong>Name:</strong> ".$row['v_name']."</p>";
    echo "<p><strong>Contact:</strong> ".$row['v_cont']."</p>";
    echo "<p><strong>Email:</strong> ".$row['v_mail']."</p>";
    $img = $row['v_img'];
    echo "<img src='photo/$img' alt='Profile Image'>";
    ?>
</div>