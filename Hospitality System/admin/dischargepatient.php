<?php

include "header.php";
//require "config.php";
if(isset($_GET['id']))
//error_reporting(E_ALL ^ E_NOTICE);
//if(isset($id) ) //here is the isset funtion i m closing it in last of the programm.
 //{
 
 
  {
  
}
$id='';
  define('id',"Hello");
$id = (int)$_GET['id'];


$sql = "UPDATE patients SET status='0' WHERE patient_id='$id'";
mysql_query($sql) or die("error");

//$sql2="UPDATE patient_admit_record SET status='0' WHERE patient_id='$id'";
//mysql_query($sql2);

$sql21="SELECT * FROM patient_admit_record WHERE patient_id='$id'";
$sql22=mysql_query($sql21);
$rs=mysql_fetch_array($sql22);

$r= $rs['room_number'];
$b= $rs['bed_number'];
$sql3= "UPDATE room_availability SET status='0' WHERE room_number='$r' and bed_occupied='$b'";
mysql_query($sql3);

$sqld="UPDATE patient_admit_record SET  discharge_date=".time('Y-m-d')." WHERE
	          patient_id='$id'";
     mysql_query($sqld);
	 header('location:billing.php?id="'.$id.'"');

?><head>
<h2>Successfully Discharge</h2>
</head>