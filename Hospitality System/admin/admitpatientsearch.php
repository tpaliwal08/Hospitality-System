<?php
include "header.php";


if(isset($_POST['pfname']))
 {
 
 $pfname= $_POST['pfname'];	
 }
 $s="SELECT * FROM patients WHERE p_firstname LIKE '%$pfname' && status=1";
$rs=mysql_query($s);

//echo $data=mysql_fetch_array($rs);

//}
?><head>

        
        </head>

<h2>Search Patient Here</h2>
<div>
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
				
				
                
            });
            /* ]]> */
        </script>
        <form id="form1" name="form1" method="post" action="">
          <span>
          <input name="pfname" class="editbox_search" id="pfname" maxlength="80" type="text" />
          </span>
          <input name="submit" type="submit" value="submit" />
        </form>
       
      </div>
<table border="2" width="250">
<tr style="color:#000">
<td align="left" valign="top">First Name</td>
<td align="left" valign="top">Last Name</td>
<td align="left" valign="top">Fathers Name</td>
<td align="left" valign="top">Age</td>
<td align="left" valign="top">Email</td>
<td align="left" valign="top">Mobile No.</td>
<td align="left" valign="top">Address</td>
<td align="left" valign="top">Modified Date</td>
 <td align="center">Action</td>




</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['p_firstname']; ?></td>
<td align="left" valign="top"><?php echo $data['p_lastname']; ?></td>
<td align="left" valign="top"><?php echo $data['pfather_name']; ?></td>
<td align="left" valign="top"><?php echo $data['p_age']; ?></td>
<td align="left" valign="top"><?php echo $data['p_email']; ?></td>
<td align="left" valign="top"><?php echo $data['p_mobile']; ?></td>
<td align="left" valign="top"><?php echo $data['p_address']; ?></td>
<td align="left" valign="top"><?php echo $data['modified_date']; ?></td>
<?php echo '<td><a href="paymentmodify.php?id=' . $data['patient_id'] . '">Payment</a></td>'; ?>
<?php echo '<td><a href="dischargepatient.php?id=' . $data['patient_id'] . '">Discharge</a></td>'; ?>
</tr>
<?php

}
?>
</table>
<?php

  include "footer.php";

?>