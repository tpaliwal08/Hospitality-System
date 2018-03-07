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


$q="SELECT * FROM specialization Where status='1'";

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>

<h2 align="center">Specialization Categories</h2>
<table style="color:#000" cellpadding="5" cellspacing="5" border="2"width="250PX">
<tr style="color:#000">
<th align="left" valign="top">Specialization Name</th>
<th align="left" valign="top">Update</th>
<th align="left" valign="top">Delete</th>
</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['sname']; ?></td>
<?php echo '<td><a href="editspecialization.php?id=' . $data['sid'] . '">Edit</a></td>';  ?>

<?php echo '<td><a href="deletespecialization.php?id=' . $data['sid'] . '">Delete</a></td>';  ?>
</tr>

<?php
}
?>
</table>
<?php
include "footer.php";
?>