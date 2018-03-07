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

$sql = "UPDATE specialization SET status='0' where sid='$id'";
mysql_query($sql) or die("an error occured");
header("location:viewdoctorspecialization.php");
echo "successfully Deleted";
?>
	
