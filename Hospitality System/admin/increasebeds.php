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
echo $id = (int)$_GET['id'];

$sql = "SELECT * FROM rooms WHERE room_number='$id'";
	      $result = mysql_query($sql);
	      $row = mysql_fetch_array($result);

?>
	 <script src="js/jquery-form-validate/lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="js/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script src="js/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript">
        </script>
       <script type="text/javascript">
	   
	   
	  jQuery(function(){
	                jQuery("#bedlmt").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Should be a number"
                });
                
	   });
	   </script>
<form method="post" action="updateward.php">
	       <input type="hidden" name="rno" value="<?php echo $row['room_number'];?>">
<table>
		<tr>       
	        <td>Increase Beds</td>
	          <td> 
	             <?php echo $row['bed_limit'];?> + <input type="text"  id="bedlmt" name="bedlmt"
	        size="20" value="">
	          </td>
	        </tr>
			<tr>      
	          <td align="right">
	<input type="submit" name="submit" value="Update">
	          </td>
	        </tr>
            </table>
	      </form>
	<?php
	     
		 	 mysql_close();
	  //}  //here isset function closing 
	?>