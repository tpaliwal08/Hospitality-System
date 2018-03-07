<?php
include ('header.php');
 
if(isset($_POST["submit"])) 


   {

     if(isset($_GET['pid']))
	 
      {
           $pid = $_GET['pid'];
         
               $query="INSERT INTO patient_payment(patient_id,p_firstname,p_lastname,pfather_name,admit,doctor_fee,medical_fee,total_amount,advance_amount,created_date,modified_date)VALUES(".$id.",'".$_POST['pfname']."','".$_POST['plname']."','".$_POST['pfnm']."','".$_POST['padmit']."','".$_POST['docfee']."','".$_POST['medfee']."','".$_POST['total']."','".$_POST['advance']."','".$_POST['cdate']."','".$_POST['mdate']."')";
  
 mysql_query($query) or die("databse error");
   echo " successfully updated";
   //else
   //echo "An error occublack, Please Resubmit the form";
   //header('location:adduser.php');
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
				jQuery("#plname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				jQuery("#pfnm").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				jQuery("#page").validate({
                    expression: "if (VAL.match(/^[0-99]*$/) && VAL) return true; else return false;",
                    message: "Please enter a valid age"
                });
				jQuery("#pmob").validate({
                    expression: "if (VAL.match(/^[9][0-9]{9}$/)) return true; else return false;",
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
</head>
<body>


<h2>Patient Payment Form</h2>

<form action="" method="post" name="form1" enctype="multipart/form-data">
<table >
<tr>
<td><label class="black">First Name</label>
</td>
<td><input type="text" name="pfname" id="pfname" /></td>
</tr>
<tr>
<td><label class="black">Last Name</label>
</td>
<td><input type="text" name="plname" id="plname" /></td>
</tr>
<tr>
<td><label class="black">Father Name</label>
</td>
<td><input type="text" name="pfnm" id="pfnm" /></td>
</tr>
<tr>
<td><label class="black">Admit</label>
</td>
<td><select name="padmit" id="padmit">
<option value="0">Please Select</option>
<option value="yes">Yes</option>
<option value="no">No</option>
</select>
</td>
</tr>
<tr>
<td><label class="black">Bed Charge total</label>
</td>
<td><input type="text" name="docfee" id="docfee" /></td>
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
<td><label class="black">Total Amount</label>
</td>
<td><input type="text" name="total" id="total" /></td>
</tr>
<tr>
<td><label class="black">Advance Amount</label>
</td>
<td><input type="text" name="advance" id="advance"/></td>
</tr>
<tr>
<td><label class="black">Created Date</label>
</td>
<td><input type="text" name="cdate" id="cdate"/></td>
</tr>
<tr>
<td><label class="black">Modified Date</label>
</td>
<td><input type="text" name="mdate" id="mdate"/></td>
</tr>

<tr>
<td>
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