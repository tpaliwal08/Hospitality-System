<?php
include "header.php";
//require "config.php";
$q="SELECT patients.*
     , opd_patients.doctor_id
     , opd_patients.disease
     , opd_patients.priscription
     , opd_patients.pathologytest
     , opd_patients.patient_id
     , doctors.firstname
     , doctors.lastname

FROM
  patients
INNER JOIN opd_patients
ON patients.patient_id = opd_patients.patient_id
INNER JOIN doctors
ON opd_patients.doctor_id = doctors.id
 WHERE patients.status='1'";

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>
<table border="1" style="margin-left:0px">
<tr style="color:#000">
<th align="" valign="">Name</th>
<th align="" valign="">Fathers Name</th>
<th align="" valign="">Age</th>
<th align="" valign="">Email</th>
<th align="" valign="">Mobile No.</th>
<th align="" valign="">Address</th>
<th align="" valign="">Alloted Doctor</th>
<th align="" valign="">Disease</th>
<th align="" valign="">Prescription</th>
<th align="" valign="">Pathology Test</th>
<th align="" valign="">Modified Date</th>
 <th align="center">Modify Payment</th>
 <th align="center">Billing</th>
</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['p_firstname']; ?> <?php echo $data['p_lastname']; ?></td>
<td align="left" valign="top"><?php echo $data['pfather_name']; ?></td>
<td align="left" valign="top"><?php echo $data['p_age']; ?></td>
<td align="left" valign="top"><?php echo $data['p_email']; ?></td>
<td align="left" valign="top"><?php echo $data['p_mobile']; ?></td>
<td align="left" valign="top"><?php echo $data['p_address']; ?></td>
<td align="left" valign="top"><?php echo $data['firstname']." ".$data['lastname']; ?></td>
<td align="left" valign="top"><?php echo $data['disease']; ?></td>
<td align="left" valign="top"><?php echo $data['priscription']; ?></td>
<td align="left" valign="top"><?php echo $data['pathologytest']; ?></td>
<td align="left" valign="top"><?php echo $data['modified_date']; ?></td>
<?php echo '<td><a href="paymentmodifyopd.php?id=' . $data['patient_id'] . '">Modify payment</a></td>'; ?>
<?php echo '<td><a href="opdpatientbilling.php?id=' . $data['patient_id'] . '">Bill</a></td>'; ?>
<?php /*?><?php echo '<td><a href="finalpayment.php?id=' . $data['patient_id'] . '">Final payment</a></td>'; ?><?php */?>
</tr>

<?php
}
?>
</table>
<?php

   include "footer.php";
?>
