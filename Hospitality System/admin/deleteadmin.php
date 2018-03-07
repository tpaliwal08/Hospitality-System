<?php

include "header.php";
//include "config.php";
if(isset($_POST['submit']))
//error_reporting(E_ALL ^ E_NOTICE);
//if(isset($id) ) //here is the isset funtion i m closing it in last of the programm.
 //{
 
 
  {
  
}
  //define('id',"Hello");
 $id =$_GET['id'];

$sql = "UPDATE user SET status='0' where user_id='$id'";
mysql_query($sql) or die(mysql_error());
header("location:view_admin.php");
echo "successfully Deleted";
?>
	
