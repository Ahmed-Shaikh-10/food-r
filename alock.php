<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:alogin.php");
}
include("config.php");
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select * from admin where a_name='$user_check' OR a_cont='$user_check'
 OR a_mail='$user_check'");
$row=mysql_fetch_array($ses_sql);
?>
<html>
<body>
<center style="color:#FF0000;"><h1>
<?php
echo "Welcome "."<del>".$data=$row['a_name' OR 'a_cont' OR 'a_mail']."</del>";
?>
</center></h1>
</body>
</html>