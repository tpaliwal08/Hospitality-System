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
 $id = $_POST['rno'];
 $bedlmt=$_POST['bedlmt'];
 $bedquery="SELECT bed_limit FROM rooms WHERE room_number='$id'";
 $rs=mysql_query($bedquery);
 $row=mysql_fetch_array($rs);
 $last=$row['bed_limit'];
 $totalbeds=$last-$bedlmt;




        $sql="UPDATE rooms SET bed_limit='$totalbeds' WHERE
	          room_number='$id'";
           mysql_query($sql);
		    
			 
		 $bed="DELETE FROM `room_availability` WHERE `room_number`='$id' AND status=0 ORDER BY bed_occupied DESC LIMIT $bedlmt";
		 mysql_query($bed) or die(mysql_error());
			

	
	echo "successfully Updated";
	//header("location:updatewardsuccess.php");
	
}
?>
<?php
  
  include "footer.php";
  
?>