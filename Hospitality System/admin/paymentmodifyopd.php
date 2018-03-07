<?php

include "header.php";
//include "config.php";
 
if(isset($_POST['submit']))
//error_reporting(E_ALL ^ E_NOTICE);
//if(isset($id) ) //here is the isset funtion i m closing it in last of the programm.
 //{
 
 
  {
  
  define('id',"Hello");
 $id = (int)$_GET['id'];

$sql = "SELECT opd_patients.pathology_fee
     , patient_payment.doctor_fee
     , patient_payment.medical_fee
     , patient_payment.advance_amount
FROM
  patient_payment patient_payment
INNER JOIN opd_patients
ON patient_payment.patient_id = opd_patients.patient_id WHERE patient_payment.patient_id='$id'";
	      $result = mysql_query($sql);
	      $row = mysql_fetch_array($result);
  
  
             $pathfee=$row['pathology_fee']+$_POST['pathfee'];
             $docfee=$row['doctor_fee']+$_POST['docfee'];
		     $medfee=$row['medical_fee']+$_POST['medfee'];
             $advance=$row['advance_amount']+$_POST['advance'];;
		     $total=$pathfee+$docfee+$medfee-$advance ;
			//exit();
			$sql="UPDATE patient_payment SET  doctor_fee='$docfee',medical_fee=$medfee,advance_amount='$advance',total_amount='$total',modified_date='".date("Y-m-d")."' WHERE patient_id='$id'";
     mysql_query($sql);
	 $sql2="UPDATE opd_patients SET pathology_fee='$pathfee' WHERE patient_id='$id'";
	 mysql_query($sql2);
	echo "successfully Updated";
  
}
 
		  
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
                
				jQuery("#pathfee").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
				jQuery("#docfee").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
				jQuery("#medfee").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
				jQuery("#total").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
				jQuery("#advance").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
                
            });
            /* ]]> */
        </script>
</head>
<h2>Add More To Payment Details</h2>
Patient Serial no. <?php  echo $_GET['id']; ?>
	  <form method="post" action="" name="form1" onsubmit="return ValidateForm()">
      <table border=1>
	  		
	          <td>Add More to Pathology Charges</td>
	          <td>
	            <input type="text" name="pathfee" id="pathfee"
	        size="20">
	          </td>
	        </tr>
			<tr>       
	          <td>Add More to Doctor's Fee</td>
	          <td>
	            <input type="text" name="docfee" id="docfee"
	        size="20">
	          </td>
	        </tr>
			<tr>       
	          <td>Add More to Medicine Fee</td>
	          <td>
	            <input type="text" name="medfee" id="medfee"
	        size="20">
	          </td>
	        </tr>
            <tr>       
	          <td>Add More to Advance Deposited</td>
	          <td>
	            <input type="text" name="advance" id="advance"
	        size="20">
	          </td>
	        </tr>
	        <tr>
	          <td align="right">
	            <input type="submit"
	          name="submit" value="Update to Patient Billing">
	          </td>
	        </tr>
            </table>
	      </form>
	  	<?php
        	
			
	// mysql_close();
	  //}  //here isset function closing 
	?>