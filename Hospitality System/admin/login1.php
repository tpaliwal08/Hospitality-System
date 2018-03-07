<?php
session_start();
//include "header.php";
require "config.php";


 if(isset($_POST['submit']))
 {
    $username = $_POST['uname'];
	$password = $_POST['password'];

	if($username && $password)
	{

	$query= mysql_query("SELECT * From user WHERE username='$username' LIMIT 1");
	$numrows=mysql_num_rows($query);

	if ($numrows!=0)
	{
	//code to login
	 while ($row = mysql_fetch_assoc($query))
	 	{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		}
		
		if($username==$dbusername&&$password==$dbpassword)
		{
		$_SESSION['username']=$username;
		//$_SESSION[['password']=$password;
			header('location:home.php?var="loginsuccess"');
			
		}
		else
		 header('location:passwrong.php');
		
	}
	else
	header('location:invaliduser.php');

	
	}
	else
	header("location:index.php");
   	//die("Please enter  username and Password!");

   }
	
 ?>