<?php

include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}

//define('id',"h");
//var_dump($sid);
if(isset($_POST['submit']))
{
$cid = $_POST['cid'];
$scatt=$_POST['scatt'];



$sql="UPDATE staff_category SET  category_name='$scatt' WHERE
	          category_id='$cid'";
     mysql_query($sql);
	
	echo "successfully Updated";
	//header("location:paymentmodify.php");
	
}
?>
<?php
  
  include "footer.php";
  
?>