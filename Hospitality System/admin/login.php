<?php
session_start();
include "../header.php";
//require "config.php";

if(isset($_POST['submit']))
{
		//Things to be get done here.
		$sqlCheck = "SELECT id FROM user WHERE username='".$_POST['uname']."' AND password='".$_POST['password']."' LIMIT 1";
		$resCheck = mysql_query($sqlCheck);
		
			//User is valid
			$rowCheck = mysql_fetch_assoc($resCheck);
			$_SESSION['user_id'] = $rowCheck['id'];
			$_SESSION['username'] = $_POST['uname'];
			header('location:home.php');
			
		//"SELECT id FROM tbl_employee WHERE email='".$_POST['txtUsername']."'"
		//sprintf("SELECT id FROM tbl_employee WHERE email='%s' ",$_POST['txtUsername'])
	
}
?>


<?php
include 'footer.php';
?>