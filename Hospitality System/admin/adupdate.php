<?php
include "header.php";
require "config.php";
if(isset($_POST["btnUpdate"]))
	{
		$cid=$_POST["chk"];
		foreach($cid as $v)
		{
		$nm=$_POST["nm".$v];
		$mail=$_POST["mail".$v];
		$fnm=$_POST["fnm".$v];
		$lnm=$_POST["lnm".$v];
		$mdt=$_POST["mdt".$v];
		
		mysql_query("update user set username='$nm',email='$mail' firstname='$fnm' lastname='$lnm' modified_date='$mdt' where user_id='$v'");
		}
	}


$q="SELECT * FROM user";

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>

<h2 align="center">Administrators Details</h2>
<form name="form1" method="post"action="" >
<table cellpadding="5" cellspacing="5" border="0"width="300PX">
<tr>
<td align="left" valign="top">User Name</td>
<td align="left" valign="top">Email</td>
<td align="left" valign="top">First Name</td>
<td align="left" valign="top">Last Name</td>
<td align="left" valign="top">Created Date</td>
<td align="left" valign="top">Modified Date</td>
 <td align="center">Action</td>




</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr>
<td><input type="text" name="nm<?php echo $data["user_id"];?>" value="<?php echo $data["username"];?>" /></td>
<td><input type="text" name="mail<?php echo $data["user_id"];?>" value="<?php echo $data["email"];?>" /></td>
<td><input type="text" name="fnm<?php echo $data["user_id"];?>" value="<?php echo $data["firstname"];?>" /></td>
<td><input type="text" name="lnm<?php echo $data["user_id"];?>" value="<?php echo $data["lastname"];?>" /></td>
<td align="left" valign="top"><?php echo $data['created_date']; ?></td>
<td><input type="text" name="mdt<?php echo $data["user_id"];?>" value="<?php echo $data["modified_date"];?>" /></td>
<td><input type="checkbox" name="chk[]" value="<?php echo $data["user_id"];?>"/></td>
<?php
}
?>
<tr>
    	<td colspan="4" align="center"><input type="submit" name="btnUpdate" value="Update" /></td>
		
		
    </tr>
</table>
</form>
<h4>Passwords are hidden due to security reasons.</h4>
