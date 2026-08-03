<?php
include("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$v_name= $_POST['name'];
$v_pass= md5($_POST['password']);
$qry = mysql_query("UPDATE a_food.view SET v_pass ='$v_pass' WHERE view.v_name ='$v_name' OR v_id= '$v_name' ");

if($qry == true)
  {
echo "password changed";
  }
else
  {
echo "not".mysql_error();
  }
}
else
{
echo "not post";
}

?>
