<?php
include "header.php";

if(isset($_POST["btnDelete"]))
	{
		$cid= $_POST["chk"];	
		foreach($cid as $v)
		{
		mysql_query("DELETE from staff WHERE staff_id='$v'");
		}
	}


$cid=$_GET['cid'];
 $q="select staff.*,staff_category.category_name from staff inner join staff_category on staff_category.category_id=staff.scategory where scategory=".$cid;

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>

<h2 align="center">Staff Details</h2>
<form name="form1" method="post"action="" >
<table cellpadding="5" cellspacing="5" border="2"width="250PX">
<tr>
<th align="left" valign="top">First Name</th>
<th align="left" valign="top">Last Name</th>
<th align="left" valign="top">Email</th>
<th align="left" valign="top">Contact Number</th>
<th align="center">Action</td>
<th align="center">Move To OPD</th>
<th align="center">Delete</td>
</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr>
<td align="left" valign="top"><?php echo $data['staff_firstname']; ?></td>
<td align="left" valign="top"><?php echo $data['staff_lastname']; ?></td>
<td align="left" valign="top"><?php echo $data['staff_email']; ?></td>
<td align="left" valign="top"><?php echo $data['staff_mobile']; ?></td>
<?php echo '<td><a href="editstaffmembers.php?id=' . $data['staff_id'] . '">Edit Info</a></td>'; ?>
<?php echo '<td><a href="sdutyinopd.php?id=' . $data['staff_id'] . '">Move To OPD</a></td>'; ?>

<td align="center"><input type="checkbox" name="chk[]"value="<?php echo $data['staff_id'];?>" /></td>
</tr>

<?php
}
?>
<tr>
    	<td colspan="4" align="center"><input type="submit" name="btnDelete" value="Delete" /></td>
		
		
    </tr>
</table>
</form>