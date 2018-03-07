<?php
include "header.php";

//if(isset($_POST["btnDelete"]))
//	{
//		$cid= $_POST["chk"];	
//		foreach($cid as $v)
//		{
//		mysql_query("DELETE from doctors WHERE id='$v'");
//		}
//	}


$q="select doctors.*,specialization.sname from doctors inner join specialization on specialization.sid=doctors.specialization WHERE doctors.status=1";

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>

<h2 align="center">Doctors</h2>
<form name="form1" method="post"action="" onclick="return ValidateForm()">
<table style="color:#000" cellpadding="5" cellspacing="5" border="2"width="250PX">
<tr style="color:#000">
<th align="left" valign="top">First Name</th>
<th align="left" valign="top">Last Name</th>
<th align="left" valign="top">Email</th>
<th align="left" valign="top">Contact Number</th>
<th align="left" valign="top">Residential Address</th>

<th align="left" valign="top">Specialization</th>
<th align="left" valign="top">Created Date</th>
<th align="left" valign="top">Modified Date</th>
<th align="left" valign="top">Update</th>
<th align="left" valign="top">Move</th>
<th align="left" valign="top">Delete</th>
</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['firstname']; ?></td>
<td align="left" valign="top"><?php echo $data['lastname']; ?></td>
<td align="left" valign="top"><?php echo $data['email']; ?></td>
<td align="left" valign="top"><?php echo $data['mobile']; ?></td>
<td align="left" valign="top"><?php echo $data['address']; ?></td>
<td align="left" valign="top"><?php echo $data['sname']; ?></td>
<td align="left" valign="top"><?php echo $data['created_date']; ?></td>
<td align="left" valign="top"><?php echo $data['modified_date']; ?></td>
<?php echo '<td><a href="editdoctors.php?id=' . $data['id'] . '">Edit</a></td>';  ?>
<?php echo '<td><a href="dutyinopd.php?id=' . $data['id'] . '">Move to OPD</a></td>';  ?>

<?php echo '<td><a href="deletedoctors.php?id=' . $data['id'] . '">Delete</a></td>';  ?>
</tr>

<?php
}
?>

</table>
</form>

<?php
include "footer.php";
?>