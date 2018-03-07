<?php

include "header.php";
//include "config.php";
if(isset($_POST['submit']))
//error_reporting(E_ALL ^ E_NOTICE);
//if(isset($id) ) //here is the isset funtion i m closing it in last of the programm.
 //{
 
 
  {
  
}
  define('id',"Hello");
 $rno = (int)$_GET['id'];

$sql = "UPDATE rooms SET status='0' WHERE room_number='$rno' && status='1'";
mysql_query($sql) or die("an error occured");
//header("location:viewrooms.php");
//echo "successfully Updated";
?>
	
