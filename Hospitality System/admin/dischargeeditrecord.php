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


$sql = "SELECT * FROM patient_admit_record
	where patient_id='$id'";
	      $result = mysql_query($sql);
	      $row = mysql_fetch_array($result);

?>
<table border=1>
	  <tr>
	    <td align=center>Please Provide discharge date and submit to continue to the Billing ...</td>
	  </tr>
	  <tr>
	    <td>
	      <table>
		<form method="post" action="dischargeupdate.php">
	       <input type="hidden" name="id" value="<?php echo $row['patient_id'];?>"
		    <tr>       
	          <td>Discharge Date</td>
	          <td>
	            <input type="text" name="disd"
	        size="20" value="<?php echo $row['discharge_date']; ?>">
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