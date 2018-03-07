<?php
include "header.php";
require "config.php";
//if(isset($_POST["btnDelete"]))
	//{
		//$cid= $_POST["chk"];	
		//foreach($cid as $v)
		//{
		//mysql_query("DELETE from user WHERE user_id='$v'");
		//}
	//}


$q="SELECT * FROM blood_group";

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>

<h2 align="center">Blood Group Details</h2>
<form name="form1" method="post"action="" >
<table cellpadding="5" cellspacing="5" border="2"width="300">
<tr style="color:#000">
<th align="left" valign="top">Blood Group</th>
<th align="left" valign="top">Quantity</th>
<th align="left" valign="top">Modified Date</th>
<th align="center"><strong>Update</strong></th>




</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['group_name']; ?></td>
<td align="left" valign="top"><?php echo $data['quantity']; ?></td>
<td align="left" valign="top"><?php echo $data['modified_date']; ?></td>

<?php echo '<td><a href="editbg.php?id=' . $data['group_id'] . '">Edit</a></td>';  ?>
</tr>

<?php
}
?>
</table>
</form>
<div style="min-height:300px"></div>

<?php
 
 include "footer.php";
 
?>
