<?php
include "header.php";
//require "config.php";
$q="SELECT * FROM pathology_test WHERE status='1'";

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>
<table border="1" style="margin-left:0px">
<tr style="color:#000">
<th align="" valign="">Test Name</th>
<th align="" valign="">Edit</th>
<th align="" valign="">Delete</th>
</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['test_name']; ?></td>
<?php echo '<td><a href="editpathtest.php?id=' . $data['test_id'] . '">Edit</a></td>'; ?>
<?php echo '<td><a href="deletepathtest.php?id=' . $data['test_id'] . '">Delete</a></td>'; ?>
<?php /*?><?php echo '<td><a href="finalpayment.php?id=' . $data['patient_id'] . '">Final payment</a></td>'; ?><?php */?>
</tr>

<?php
}
?>
</table>
<?php

   include "footer.php";
?>
