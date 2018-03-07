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
$id = (int)$_GET['id'];

?>
	
         <div style="font-size:24px; float:left; padding-right:30px;"> <?php echo '<a href="increasebeds.php?id='.$id.'">Click Here To Increase Bed Limit</a>';  ?><br /></div>
          
         <div style="font-size:24px; float:left"> <?php echo '<a href="decreasebeds.php?id=' . $id . '">Click Here To Decrease Bed Limit</a>';  ?></div>
	<?php
	     
		// 	 mysql_close();
	  //}  //here isset function closing 
	  include "footer.php";
	?>