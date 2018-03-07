<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	
require "config.php";

$sqlSel = "SELECT * FROM user WHERE id=".$_SESSION['user_id'];
$resSel = mysql_query($sqlSel);
$rowSel = mysql_fetch_assoc($resSel);

include 'header.php';
}
?>
      <!-- Content Section Start -->
	  <table cellpadding="2" cellspacing="3" border="1" width="60%">
	  	<tr>
			<td valign="top" align="left">User Name</td>
			<td valign="top" align="left"><?php
			echo $rowSel['username'];
			?></td>
		</tr>
		<tr>
			<td valign="top" align="left">Email</td>
			<td valign="top" align="left"><?php
			echo $rowSel['email'];
			?></td>
		</tr>
		<tr>
			<td valign="top" align="left">Password</td>
			<td valign="top" align="left"><?php
			echo $rowSel['password'];
			?></td>
		</tr>
		<tr>
			<td valign="top" align="left">First Name</td>
			<td valign="top" align="left"><?php
			echo $rowSel['firstname'];
			?></td>
		</tr>
		<tr>
			<td valign="top" align="left">Last Name</td>
			<td valign="top" align="left"><?php echo $rowSel['lastname'];?></td>
		</tr>
	  </table>
      <!-- Content Section Ends -->
<?php
include 'footer.php';
?>