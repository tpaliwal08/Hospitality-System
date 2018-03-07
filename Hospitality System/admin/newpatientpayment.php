<?php
include ('header.php');
// require "config.php";
if(isset($_POST["submit"])) 


   {

    if(isset($_GET['pid']))
	 
     {
	 
           $pid = (int)$_GET['pid'];
		   var_dump($pid);
		   $q2="SELECT * FROM patients WHERE patient_id='$pid'";
           $q3=mysql_query($q2);
		   $rs=mysql_fetch_array($q3);
		 $pfname=$rs ['p_firstname'];
		  $plname=$rs ['p_lastname'];
		  $pfather=$rs['pfather_name'];
         $pmobile=$rs ['p_mobile'];
		 $paddress=$rs['p_address'];
		 $total=$_POST['pbedc']+$_POST['docfee']+$_POST['medfee']-$_POST['advance'];
  $query="INSERT INTO patient_payment
  (patient_id,p_firstname,p_lastname,pfather_name,mobile,address,bedcharge_total,doctor_fee,medical_fee,total_amount,advance_amount,created_date,modified_date)
  VALUES
  (".$pid.",
  '".$pfname."',
  '".$plname."',
  '".$pfather."',
  ".$pmobile.",
  '".$paddress."',
  '".$_POST['pbedc']."',
  '".$_POST['docfee']."',
  '".$_POST['medfee']."',
  ".$total.",
  '".$_POST['advance']."',
  '".date("Y-m-d")."',
  '".date("Y-m-d")."')";
  
 mysql_query($query) or die( mysql_error());
   //echo " successfully updated";
   //else
   //echo "An error occublack, Please Resubmit the form";
   header('location:patientbillingcomplete.php');
      } 
 
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
                    expression: "if (VAL.match(/^[a-z]+$/) && VAL) return true; else return false;",
                    message: "Please enter only characters"
                });
				jQuery("#plname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				jQuery("#plname").validate({
                    expression: "if (VAL.match(/^[a-z]+$/) && VAL) return true; else return false;",
                    message: "Please enter only characters"
                });
				jQuery("#pfnm").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				jQuery("#pfnm").validate({
                    expression: "if (VAL.match(/^[a-z]+$/) && VAL) return true; else return false;",
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
				
				jQuery("#stts").validate({
                    expression: "if (VAL.match(/^[0-1]*$/) && VAL) return true; else return false;",
                    message: "Please enter a valid number 1 or 0"
                });
                
            });
            /* ]]> */
        </script>
     
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body,td,th {
	font-size: 10px;
}
</style>
</head>
<body>


<h2>Patient Payment Form</h2>

<form action="" method="post" name="form1" onSubmit="return ValidateForm()"enctype="multipart/form-data">
<table border="3">
<tr>
<td><label class="black">Bed Charges total</label>
</td>
<td><input type="text" name="pbedc" id="pbedc" /></td>
</tr>
<tr>
<td><label class="black">Doctor Fee</label>
</td>
<td><input type="text" name="docfee" id="docfee" /></td>
</tr>
<tr>
<td><label class="black">Medical Fee</label>
</td>
<td><input type="text" name="medfee" id="medfee" /></td>
</tr>
<tr>
<td><label class="black">Pathology Fee</label>
</td>
<td><input type="text" name="pathfee" id="pathfee" /></td>
</tr>

<tr>
<td><label class="black">Advance Amount</label>
</td>
<td><input type="text" name="advance" id="advance"/></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="submit" />
</td>
</tr>

</table>


</form>
</body>

<?php

include "footer.php";
?>
</html>