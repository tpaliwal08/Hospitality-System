<?php
//session_start();
include "header.php";
if(isset($_SESSION['username']))

{
//{
//$_SESSION['username']==$username;
//session_start();


?>
<div style="float:left; font-size:18px">Welcome</div>
<div style="float:left; margin-left:10px; font-size:18px; color:#F00">
   <?php 
   if(isset($_SESSION['username']))
	echo  $_SESSION['username']; ?>
    </div>

























</div>

<?php
include "footer.php";
}
else
{
	header('location:index.php');
}
//}
?>