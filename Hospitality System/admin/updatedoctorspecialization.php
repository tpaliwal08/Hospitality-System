<?php
include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}

define('sql',"hi");
$id = $_POST['id'];
 $sname=$_POST['sname'];


$sql="UPDATE specialization SET sname='$sname'
	          WHERE
	          sid='$id'";
	 mysql_query($sql);
	
	echo "successfully Updated";
	//header("location:editadmin.php");
	

?>
<?php
  
  include "footer.php";
  
?>