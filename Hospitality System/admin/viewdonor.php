<?php
include "header.php";
require "config.php";
if(isset($_POST["btnDelete"]))
	{
		$cid= $_POST["chk"];	
		foreach($cid as $v)
		{
	mysql_query("UPDATE blood_donor SET status='0' WHERE donor_id='$v'");
		}
	}


$q="SELECT * FROM blood_donor WHERE status='1'";

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>

<h2 align="center">Available Blood Donors</h2>
<form name="form1" method="post"action="" >
<table cellpadding="10" cellspacing="10" border="2"width="300PX">
<tr style="color:#000">
<th align="left" valign="top">First Name</th>
<th align="left" valign="top">Last Name</th>
<th align="left" valign="top">Age</th>
<th align="left" valign="top">Weight</th>
<th align="left" valign="top">Blood Group</th>
<th align="left" valign="top">Address</th>
<th align="left" valign="top">Mobile No.</th>
<th align="left" valign="top">Modified Date</th>
<th align="center">Update</th>
<th align="center">Delete</th>
</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['firstname']; ?></td>
<td align="left" valign="top"><?php echo $data['lastname']; ?></td>
<td align="left" valign="top"><?php echo $data['age']; ?></td>
<td align="left" valign="top"><?php echo $data['weight']; ?></td>
<td align="left" valign="top"><?php echo $data['bloodgroup']; ?></td>
<td align="left" valign="top"><?php echo $data['address']; ?></td>
<td align="left" valign="top"><?php echo $data['mobile']; ?></td>
<td align="left" valign="top"><?php echo $data['modified_date']; ?></td>

<?php echo '<td><a href="editdonor.php?id=' . $data['donor_id'] . '">Edit</a></td>';  ?>
<td align="center"><input type="checkbox" name="chk[]"value="<?php echo $data['donor_id'];?>" /></td>


</tr>

<?php
}
?>
<tr>

<td colspan="10" align="center"><input type="submit" name="btnDelete" value="Delete" /></td>
		
		
    </tr>
</table>
</form>


<?php
 
  include "footer.php";
  
?>