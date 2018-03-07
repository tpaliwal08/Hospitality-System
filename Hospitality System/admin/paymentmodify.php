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

$sql = "SELECT * FROM patient_payment WHERE patient_id='$id'";
	      $result = mysql_query($sql);
	      $row = mysql_fetch_array($result);
  
  
             $pbedc=$row['bedcharge_total']+$_POST['pbedc'];
             $docfee=$row['doctor_fee']+$_POST['docfee'];
		     $medfee=$row['medical_fee']+$_POST['medfee'];
             $advance=$row['advance_amount']+$_POST['advance'];;
		     $total=$pbedc+$docfee+$medfee-$advance ;
			//exit();
			$sql="UPDATE patient_payment SET bedcharge_total='$pbedc', doctor_fee='$docfee',medical_fee=$medfee,advance_amount='$advance',total_amount='$total',modified_date='".date("Y-m-d")."' WHERE patient_id='$id'";
     mysql_query($sql);
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
                jQuery("#pfname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				jQuery("#pfname").validate({
                    expression: "if (VAL.match(/^[a-zA-Z]+$/) && VAL) return true; else return false;",
                    message: "Please enter only characters"
                });
				jQuery("#plname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				jQuery("#plname").validate({
                    expression: "if (VAL.match(/^[a-zA-Z]+$/) && VAL) return true; else return false;",
                    message: "Please enter only characters"
                });
				jQuery("#pfnm").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				jQuery("#pfnm").validate({
                    expression: "if (VAL.match(/^[a-zA-Z]+$/) && VAL) return true; else return false;",
                    message: "Please enter only characters"
                });
				jQuery("#page").validate({
                    expression: "if (VAL.match(/^[0-99]*$/) && VAL) return true; else return false;",
                    message: "Please enter a valid age"
                });
				jQuery("#pmob").validate({
                    expression: "if (VAL.match(/^[7-9][0-9]{9}$/)) return true; else return false;",
                    message: "Should be a valid Mobile Number"
                });
				jQuery("#paddress").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				jQuery("#padmit").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Please make a selection"
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
Patient Serial no. <?php  echo $_GET['id']; ?>
	  <table border=1>
	  <tr>
	    <td align=center>Add More Payment Details</td>
	  </tr>
	  <tr>
	    <td>
	      <table>
		<form method="post" action="" name="form1" onsubmit="return ValidateForm()">
	          <td>Add More to Bed charges</td>
	          <td>
	            <input type="text" name="pbedc" id="pbedc"
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
	      </form>
	      </table>
	    </td>
	  </tr>
	</table>
	<?php
        	
			
	 //mysql_close();
	  //}  //here isset function closing 
	?>