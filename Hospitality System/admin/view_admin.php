<?php
include "header.php";
require "config.php";
//if(isset($_POST["btnDelete"]))
//	{
//		$cid= $_POST["chk"];	
//		foreach($cid as $v)
//		{
//		mysql_query("DELETE from user WHERE user_id='$v'");
//		}
//	}


$q="SELECT * FROM user WHERE status=1";

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>

<h2 align="center">Administrators Details</h2>
<form name="form1" method="post"action="" >
<table border="2"width="300">
<tr style="color:#000">
<th align="" valign="">User Name</th>
<th align="" valign="">Email</th>
<th align="" valign="">First Name</th>
<th align="" valign="">Last Name</th>
<th align="" valign="">Created Date</th>
<th align="" valign="">Modified Date</th>
<th align="">Update</th>
<th align="">Delete</th>
</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['username']; ?></td>
<td align="left" valign="top"><?php echo $data['email']; ?></td>
<td align="left" valign="top"><?php echo $data['firstname']; ?></td>
<td align="left" valign="top"><?php echo $data['lastname']; ?></td>
<td align="left" valign="top"><?php echo $data['created_date']; ?></td>
<td align="left" valign="top"><?php echo $data['modified_date']; ?></td>
<?php /*?><td align="left" valign="top"><?php echo $data['user_id']; ?></td><?php */?>

<?php echo '<td><a href="editadmin.php?id=' . $data['user_id'] . '">Edit</a></td>';  ?>
<?php echo '<td><a href="deleteadmin.php?id=' . $data['user_id'] . '">Delete</a></td>';  ?>


</tr>

<?php
}
?>

</table>
</form>
<h4>Passwords are hidden due to security reasons.</h4>
<?php

 include "footer.php";

?>
