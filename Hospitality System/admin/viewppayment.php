<?php
include "header.php";
//require "config.php";
$q="SELECT  * FROM patient_payment";

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>
<html>
<head>
<h2 align="center"></h2>
<body>
<table border="1"  width="100">
<tr style="color:#000">
<td align="left" valign="top">Patient Id</td>
<td align="left" valign="top">First Name</td>
<td align="left" valign="top">Last Name</td>
<td align="left" valign="top">Father Name</td>
<td align="left" valign="top">Admit</td>
<td align="left" valign="top">Doctor Fee</td>
<td align="left" valign="top">Medical Charges</td>
<td align="left" valign="top">Total Amount</td>
<td align="left" valign="top">Advance amount</td>
<td align="left" valign="top">Date</td>
<td align="center">Action</td>
</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">

<td align="left" valign="top"><?php echo $data['patient_id']; ?></td>
<td align="left" valign="top"><?php echo $data['p_firstname']; ?></td>
<td align="left" valign="top"><?php echo $data['p_lastname']; ?></td>
<td align="left" valign="top"><?php echo $data['pfather_name']; ?></td>
<td align="left" valign="top"><?php echo $data['admit']; ?></td>
<td align="left" valign="top"><?php echo $data['doctor_fee']; ?></td>
<td align="left" valign="top"><?php echo $data['medical_fee']; ?></td>
<td align="left" valign="top"><?php echo $data['total_amount']; ?></td>

<td align="left" valign="top"><?php echo $data['advance_amount']; ?></td>
<td align="left" valign="top"><?php echo $data['modified_date']; ?></td>

</tr>

<?php
}
?>
</table>
</body>

<?php

   include "footer.php";
?>

</html>