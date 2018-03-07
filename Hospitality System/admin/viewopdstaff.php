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


 //$q="SELECT opd_doctor.leaving_time
//     , opd_doctor.comming_time
//	 ,opd_doctor.staff_id
//     , staff.*
//     , staff_category.category_name
//     , staff_category.category_id
//FROM
//  doctors
//INNER JOIN opd_doctor
//ON staff.staff_id = opd_doctor.staff_id
//INNER JOIN scategory
//ON staff_category.staff_id = staff.scategory 
//WHERE staff.status=1 and opd_doctor.status=1";
$q="SELECT staff.*
     , staff_category.category_name
     , staff_category.category_id
     , opd_doctor.staff_id
     , opd_doctor.comming_time
     , opd_doctor.leaving_time
FROM
  staff
INNER JOIN opd_doctor
ON staff.staff_id = opd_doctor.staff_id
INNER JOIN staff_category
ON staff.scategory = staff_category.category_id";

$rs=mysql_query($q) or die(mysql_error());
//echo $data = mysql_fetch_array($rs);

//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>

<h2>OPD Staff</h2>
<form name="form1" method="post"action="" onclick="return ValidateForm()">
<table style="color:#000" cellpadding="5" cellspacing="5" border="2"width="250PX">
<tr style="color:#000">
<th align="left" valign="top">First Name</th>
<th align="left" valign="top">Last Name</th>
<th align="left" valign="top">Email</th>
<th align="left" valign="top">Contact Number</th>
<th align="left" valign="top">Category</th>

<th align="left" valign="top">Availablelity Time</th>
<th align="left" valign="top">Update</th>
<th align="left" valign="top">Delete</th>
</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['staff_firstname']; ?></td>
<td align="left" valign="top"><?php echo $data['staff_lastname']; ?></td>
<td align="left" valign="top"><?php echo $data['staff_email']; ?></td>
<td align="left" valign="top"><?php echo $data['staff_mobile']; ?></td>
<td align="left" valign="top"><?php echo $data['category_name']; ?></td>
<td align="left" valign="top"><?php echo $data['comming_time']." to ".$data['leaving_time']; ?></td>

<?php echo '<td><a href="editopdstaff.php?id=' . $data['staff_id'] . '">Edit</a></td>';  ?>

<?php echo '<td><a href="deleteopdstaff.php?id=' . $data['staff_id'] . '">Delete</a></td>';  ?>
</tr>

<?php
}
?>
</table>
</form>
<?php
include "footer.php";
?>