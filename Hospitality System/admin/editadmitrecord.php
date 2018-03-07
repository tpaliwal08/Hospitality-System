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


$sql = "SELECT * FROM patient_admit_record
	where patient_id='$id'";
	      $result = mysql_query($sql);
	      $row = mysql_fetch_array($result);

?>
<table border=1>
	  <tr>
	    <td align=center>Edit Blood Donor Details</td>
	  </tr>
	  <tr>
	    <td>
	      <table>
		<form method="post" action="updatedonor.php">
	       <input type="hidden" name="id" value="<?php echo $row['donor_id'];?>"
		    <tr>       
	          <td>First name</td>
	          <td>
	            <input type="text" name="fname"
	        size="20" value="<?php echo $row['firstname']; ?>">
	          </td>
	        </tr>
	        <tr>
	          <td>Last name</td>
	          <td>
	            <input type="text" name="lname" size="40"
	          value="<?php echo $row['lastname']; ?>">
	          </td>
	        </tr>
			 <tr>       
	          <td>Age</td>
	          <td>
	            <input type="text" name="dage"
	        size="20" value="<?php echo $row['age']; ?>">
	          </td>
	        </tr>
			 <tr>       
	          <td>Weight</td>
	          <td>
	            <input type="text" name="wgt"
	        size="20" value="<?php echo $row['weight']; ?>">
	          </td>
	        </tr>
			 <tr>       
	          <td>Blood Group</td>
	          <td>
	            <input type="text" name="bgnm"
	        size="20" value="<?php echo $row['bloodgroup']; ?>">
	          </td>
	        </tr>
			<tr>       
	          <td>Address</td>
	          <td>
	            <input type="text" name="address"
	        size="20" value="<?php echo $row['address']; ?>">
	          </td>
	        </tr>
			<tr>       
	          <td>Email</td>
	          <td>
	            <input type="text" name="dmail"
	        size="20" value="<?php echo $row['email']; ?>">
	          </td>
	        </tr>
			<tr>       
	          <td>Mobile</td>
	          <td>
	            <input type="text" name="dmob"
	        size="20" value="<?php echo $row['mobile']; ?>">
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