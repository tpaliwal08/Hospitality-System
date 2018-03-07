<?php
include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}

define('sql',"hi");
$id = $_POST['id'];
 $tname=$_POST['tname'];


$sql="UPDATE pathology_test SET test_name='$tname' WHERE
	          test_id='$id'";
	 mysql_query($sql);
	
	echo "successfully Updated";
	header("location:viewpathtest.php");
	

?>
<?php
  
  include "footer.php";
  
?>