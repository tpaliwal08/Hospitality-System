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

$sql = "SELECT * FROM staff WHERE staff_id='$id'";
	      $result = mysql_query($sql);
	      $row = mysql_fetch_array($result);

?>
	
<table border=1>
	  <tr>
	    <td align=center>Information Details</td>
	  </tr>
	  <tr>
	    <td>
	      <table>
		<form method="post" action="updatestaff.php">
	       <input type="hidden" name="id" value="<?php echo $row['staff_id'];?>">
		    <tr>       
	          <td>First Name</td>
	          <td>
	            <input type="text" name="sfname"
	        size="20" value="<?php echo $row['staff_firstname']; ?>">
	          </td>
	        </tr>
			<tr>       
	          <td>Last Name</td>
	          <td>
	            <input type="text" name="slname"
	        size="20" value="<?php echo $row['staff_lastname']; ?>">
	          </td>
	        </tr>
			<tr>       
	          <td>Email</td>
	          <td>
	            <input type="text" name="smail"
	        size="20" value="<?php echo $row['staff_email']; ?>">
	          </td>
	        </tr>
			<tr>       
	          <td>Mobile</td>
	          <td>	
	            <input type="text" name="smob"
	        size="20" value="<?php echo $row['staff_mobile']; ?>">
	          </td>
	        </tr>
			<tr>       
	          <td>Modified Date</td>
	          <td>
	            <input type="text" name="mdate"
	        size="20" value="<?php echo $row['modified_date']; ?>">
	          </td>
	        </tr>
			<tr>       
	          <td align="right">
	            <input type="submit"
	          name="submit" value="Update">
	          </td>
	        </tr>
	      </form>
	      </table>
	    </td>
	  </tr>
	</table>
	<?php
	 mysql_close();
	  //}  //here isset function closing 
	?>