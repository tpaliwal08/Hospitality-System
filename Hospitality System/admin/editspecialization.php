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


$sql = "SELECT * FROM specialization
	where sid='$id'";
	      $result = mysql_query($sql);
	      $row = mysql_fetch_array($result);

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
                jQuery("#sname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "This Field is Required"
                });
				
		   });
		   </script>
</head>
<form method="post" action="updatedoctorspecialization.php" name="form1">
	       <input type="hidden" name="id" value="<?php echo $row['sid'];?>">
<table>       
	       <tr> 
             <td>Specialization name</td>
	          <td>
	            <input type="text" id="sname" name="sname"
	        size="20" value="<?php echo $row['sname']; ?>">
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