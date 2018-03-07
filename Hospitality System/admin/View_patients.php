<?php
include "header.php";
//require "config.php";



//$q="SELECT  * FROM patients WHERE admitted='yes' and status='1'";
$q="SELECT patient_admit_record.room_number
     , patients.*
     , patient_admit_record.bed_number
FROM
  patients
INNER JOIN patient_admit_record
ON patients.patient_id = patient_admit_record.patient_id
WHERE patients.status = 1";
$rs=mysql_query($q) or die(mysql_error());
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>
<head>
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
				
				
				
				
                
            });
            /* ]]> */
        </script>
        <form id="form1" name="form1" method="post" action="admitpatientsearch.php">
          <span>
          <input name="pfname" class="editbox_search" id="pfname" maxlength="80" type="text" />
          </span>
          <input name="submit" type="submit" value="submit" />
        </form>
       
      </div>

<h2 align="center">Patient Details</h2>
</head>
<body>
<div id="vpr">
<table border="1" width="250">
<tr style="color:#000" height="">
<th align="left" valign="top">Ward Number</th>
<th align="left" valign="top">Bed Number</th>
<th align="left" valign="top">First Name</th>
<th align="left" valign="top">LastName</th>
<th align="left" valign="top">Fathers Name</th>
<th align="left" valign="top">Age</th>
<th align="left" valign="top">Email</th>
<th align="left" valign="top">Mobile No.</th>
<th align="left" valign="top">Address</th>
<th align="left" valign="top">Modified Date</th>
<th align="left" valign="top">Payment</th>
<th align="left" valign="top">Bill</th>
 <th align="left" valign="top">Discharge</th>




</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['room_number']; ?></td>
<td align="left" valign="top"><?php echo $data['bed_number']; ?></td>
<td align="left" valign="top"><?php echo $data['p_firstname']; ?></td>
<td align="left" valign="top"><?php echo $data['p_lastname']; ?></td>
<td align="left" valign="top"><?php echo $data['pfather_name']; ?></td>
<td align="left" valign="top"><?php echo $data['p_age']; ?></td>
<td align="left" valign="top"><?php echo $data['p_email']; ?></td>
<td align="left" valign="top"><?php echo $data['p_mobile']; ?></td>
<td align="left" valign="top"><?php echo $data['p_address']; ?></td>
<td align="left" valign="top"><?php echo $data['modified_date']; ?></td>
<?php echo '<td><a href="paymentmodify.php?id=' . $data['patient_id'] . '">Modify Payment</a></td>'; ?>
<?php echo '<td><a href="Billing.php?id=' . $data['patient_id'] . '">Bill</a></td>'; ?>
<?php echo '<td><a href="dischargepatient.php?id=' . $data['patient_id'] . '">Discharge</a></td>'; ?>
</tr>

<?php
}
?>
</table></div>
</body>
<?php

   include "footer.php";
?>
</html>