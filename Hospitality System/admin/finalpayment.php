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


$sql = "SELECT * FROM patient_payment
	where patient_id='$id'";
	      $result = mysql_query($sql);
	      $row = mysql_fetch_array($result);

?>
<table border=1>
	  <tr>
	    <td align=center>payment Details</td>
	  </tr>
	  <tr>
	    <td>
	      <table>
		<form method="post" action="updatepayment.php">
	       <input type="hidden" name="id" value="<?php echo $row['patient_id'];?>"
		    <tr>       
	          <td>Doctor's Fee</td>
	          <td>
	            <input type="text" name="docfee"
	        size="20" value="<?php echo $row['doctor_fee']; ?>">
	          </td>
	        </tr>
	        <tr>
	          <td>Medical Charges</td>
	          <td>
	            <input type="text" name="medfee" size="40"
	          value="<?php echo $row['medical_fee']; ?>">
	          </td>
	        </tr>
			 <tr>       
	          <td>Total amount</td>
	          <td>
	            <input type="text" name="total"
	        size="20" value="<?php echo $row['total_amount']; ?>">
	          </td>
	        </tr>
			 <tr>       
	          <td>Advance Amount</td>
	          <td>
	            <input type="text" name="advance"
	        size="20" value="<?php echo $row['advance_amount']; ?>">
	          </td>
	        </tr>
			 <tr>       
	          <td>Date	</td>
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