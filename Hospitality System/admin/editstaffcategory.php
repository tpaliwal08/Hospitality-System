e<?php

include "header.php";
//include "config.php";
if(isset($_POST['submit']))
//error_reporting(E_ALL ^ E_NOTICE);
//if(isset($id) ) //here is the isset funtion i m closing it in last of the programm.
 //{
 
 
  {
  
}
  //define('id',"Hello");
$id = (int)$_GET['cid'];

$sql = "SELECT * FROM staff_category WHERE category_id='$id'";
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
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#scatt").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
			});
			</script>
            <h2>Edit Staff Category</h2>
	<form method="post" action="updatestaffcategory.php">
	       <input type="hidden" name="cid" value="<?php echo $row['category_id'];?>">
<table>
	          <tr>       
	          <td>Category Name</td>
	          <td>
	            <input type="text" name="scatt" id="scatt"
	        size="20" value="<?php echo $row['category_name']; ?>">
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
	 //mysql_close();
	  //}  //here isset function closing 
	?>