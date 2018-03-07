<?php
include "header.php";
//require "config.php";



//$q="SELECT  * FROM patients WHERE admitted='yes' and status='1'";
define('id',"Hello");
 $id = (int)$_GET['id'];

$sql = "SELECT * FROM patient_payment WHERE patient_id='$id'";
	      $result = mysql_query($sql);
	      $data = mysql_fetch_array($result);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>
<body>
<h3>Pateint Serial No. <?php echo $id; ?> </h3>
<h3> Date : <?php echo date('Y-m-d'); ?></h3>
<table border="2" width="500" cellpadding="20" height="70">
<tr style="color:#000" height="0">
<th align="left" valign="top">Patient Name</th>
<th align="left" valign="top">Father's Name</th>
<th align="left" valign="top">Mobile No.</th>
<th align="left" valign="top">Total Bed Charges</th>
<th align="left" valign="top">Doctor's Fee</th>
<th align="left" valign="top">Medical Charges</th>
<th align="left" valign="top">Advance Deposited.</th>
<th align="left" valign="top">Updated</th>

</tr>
<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['p_firstname']; ?> <?php echo $data['p_lastname']; ?></td>
<td align="left" valign="top"><?php echo $data['pfather_name']; ?></td>
<td align="left" valign="top"><?php echo $data['mobile']; ?></td>
<td align="left" valign="top"><?php echo $data['bedcharge_total']; ?></td>
<td align="left" valign="top"><?php echo $data['doctor_fee']; ?></td>

<td align="left" valign="top"><?php echo $data['medical_fee']; ?></td>
<td align="left" valign="top"><?php echo $data['advance_amount']; ?></td>
<td align="left" valign="top"><?php echo $data['modified_date']; ?></td>
<?php /*?><?php echo '<td><a href="paymentmodify.php?id=' . $data['patient_id'] . '">Payment</a></td>'; ?>
<?php echo '<td><a href="dischargepatient.php?id=' . $data['patient_id'] . '">Discharge</a></td>'; ?><?php */?>
</tr>
</table>

<div style="font-family:'Times New Roman', Times, serif; font-size:24px;">
Hence Your Total Bill Payment =Rupees <?php echo $data['total_amount']; ?></br>

</div>
</body>
<?php

   include "footer.php";
?>
</html>