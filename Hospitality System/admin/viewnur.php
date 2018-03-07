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


$rid=$_GET['rid'];
 $q="select rooms.*,room_category.room_name from rooms inner join room_category on room_category.room_id=rooms.room_type where room_type=".$rid;

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>

<h2 align="center">Nurses Details</h2>
<form name="form1" method="post"action="" >
<table cellpadding="5" cellspacing="5" border="0"width="250PX">
<tr>
<td align="left" valign="top">First Name</td>
<td align="left" valign="top">Last Name</td>
<td align="left" valign="top">Email</td>
<td align="left" valign="top">Contact Number</td>
<td align="center">Action</td>
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
<?php echo '<td><a href="editnurse.php?id=' . $data['staff_id'] . '">Edit Info</a></td>'; ?>
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