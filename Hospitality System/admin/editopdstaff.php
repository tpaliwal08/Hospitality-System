<?php

include "header.php";
//include "config.php";
if(isset($_GET['id']))
//error_reporting(E_ALL ^ E_NOTICE);
//if(isset($id) ) //here is the isset funtion i m closing it in last of the programm.
 //{
 
 
  {
  
}
$id='';
  define('id',"Hello");
$id = (int)$_GET['id'];


$sql = "SELECT * FROM opd_doctor WHERE staff_id='$id'";
	      $result = mysql_query($sql);
	      $row = mysql_fetch_array($result);

$row['staff_id'];
?><head>
  <script src="js/jquery-form-validate/lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="js/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script src="js/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript">
        </script>
 <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#ctime").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "This field is Required"
                });
				jQuery("#ltime").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "This field is Required"
                });
				
            });
            /* ]]> */
        </script>
</head>

<h2>Edit OPD Staff</h2>
<form method="post" action="updateopddoctors.php" name="form1" onsubmit="return ValidateForm()">
<table  align="center">
		<input type="hidden" name="id" value="<?php echo $row['staff_id'];?>" />       
	         <tr> 
             <td>Comming Time</td>
	          <td>
	            <input type="text" id="ctime" name="ctime"
	        size="20" value="<?php echo $row['comming_time']; ?>">
	          </td>
	        </tr>
            <tr> 
             <td>Leaving Time</td>
	          <td>
	            <input type="text" id="ltime" name="ltime"
	        size="20" value="<?php echo $row['leaving_time']; ?>">
	          </td>
	        </tr>
	        <tr>
	          <td align="right">
	            <input type="submit"
	          name="submit" value="Update">
	          </td>
	        </tr>
            </table>
	      </form>
	<?php
	 //mysql_close();
	  //}  //here isset function closing 
	?>