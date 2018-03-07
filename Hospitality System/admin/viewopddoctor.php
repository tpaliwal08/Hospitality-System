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


 $q="SELECT opd_doctor.leaving_time
     , opd_doctor.comming_time
     , doctors.*
     , specialization.sname
     , specialization.sid
FROM
  doctors
INNER JOIN opd_doctor
ON doctors.id = opd_doctor.doctor_id
INNER JOIN specialization
ON specialization.sid = doctors.specialization 
WHERE doctors.status=1";

$rs=mysql_query($q) or die(mysql_error());
//echo $data = mysql_fetch_array($rs);

//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>

<h2 align="center">OPD Doctors</h2>
<table style="color:#000" cellpadding="5" cellspacing="5" border="2"width="250PX">
<tr style="color:#000">
<th align="left" valign="top">First Name</th>
<th align="left" valign="top">Last Name</th>
<th align="left" valign="top">Email</th>
<th align="left" valign="top">Contact Number</th>
<th align="left" valign="top">Residential Address</th>

<th align="left" valign="top">Specialization</th>

<th align="left" valign="top">Availablelity Time</th>
<th align="left" valign="top">Update</th>
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
<td align="left" valign="top"><?php echo $data['comming_time']." to ".$data['leaving_time']; ?></td>

<?php echo '<td><a href="editopddoctors.php?id=' . $data['id'] . '">Edit</a></td>';  ?>

<?php echo '<td><a href="deleteopddoctors.php?id=' . $data['id'] . '">Delete</a></td>';  ?>
</tr>

<?php
}
?>
</table>
<?php
include "footer.php";
?>