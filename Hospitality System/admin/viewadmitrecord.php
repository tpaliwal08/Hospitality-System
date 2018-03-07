<?php
include "header.php";
//require "config.php";
$q="SELECT  * FROM patient_admit_record";

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>
<head>
<h2 align="center">Patient Admit Record</h2>
</head>
<div id="vpr">

<table border="1" width="250">
<tr style="color:#000">
<td align="left" valign="top">Admit Date</td>
<td align="left" valign="top">Ward Type</td>
<td align="left" valign="top">Room Number</td>
<td align="left" valign="top">Bed Number</td>
<td align="left" valign="top">Discharge Date</td>
 <td align="center">Action</td>




</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['admit_date']; ?></td>
<td align="left" valign="top"><?php echo $data['room_type']; ?></td>
<td align="left" valign="top"><?php echo $data['room_number']; ?></td>
<td align="left" valign="top"><?php echo $data['bed_number']; ?></td>
<td align="left" valign="top"><?php echo $data['discharge_date']; ?></td>
<?php echo '<td><a href="dischargeeditrecord.php?id=' . $data['patient_id'] . '">Edit</a></td>'; ?>
</tr>

<?php
}
?>
</table></div>
<div style="min-height:300px"></div>
<?php

   include "footer.php";
?>