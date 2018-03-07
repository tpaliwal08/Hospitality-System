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


$sql = "SELECT * FROM pathology_test
	where test_id='$id'";
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
                jQuery("#uname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				
				
				
				jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
				jQuery("#pwd").validate({
                    expression: "if (VAL.length > 5 && VAL) return true; else return false;",
                    message: "Please enter a valid Password"
                });
				
				
				jQuery("#fname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				
				jQuery("#fname").validate({
                    expression: "if (VAL.match(/^[a-zA-Z]+$/) && VAL) return true; else return false;",
                    message: "Please enter only characters"
                });
				jQuery("#lname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				jQuery("#fname").validate({
                    expression: "if (VAL.match(/^[a-zA-Z]+$/) && VAL) return true; else return false;",
                    message: "Please enter only characters"
                });
                
            });
            /* ]]> */
        </script>
			
</head>
<h2>Edit Pathology Test Details</h2>
<form method="post" action="updatepathtest.php" name="form1" onsubmit="return ValidateForm()">
	       <input type="hidden" name="id" value="<?php echo $row['test_id'];?>" />

<table border=1>
		    <tr>       
	          <td>Username</td>
	          <td>
	            <input type="text" id="tname" name="tname"
	        size="20" value="<?php echo $row['test_name']; ?>">
	          </td>
	        </tr>
	        <tr>
	          <td align="right">
	            <input type="submit"
	          name="submit" value="Update">
	          </td>
	        </tr></table>
	      </form>
	      
	<?php
	 mysql_close();
	  //}  //here isset function closing 
	?>