<?php
require ('config.php');

    $query="INSERT INTO user(username,email,password,firstname,lastname,created_date,modified_date,status)VALUES ('".$_POST['uname']."','".$_POST['email']."','".$_POST['pwd']."','".$_POST['fname']."','".$_POST['lname']."','".time()."','".time()."','".$_POST['stts']."')";
  
   if(mysql_query($query))
   header('location:adcreat.php');
   else
   echo "An error occured, Please Resubmit the form";
   header('location:adduser.php');




?>