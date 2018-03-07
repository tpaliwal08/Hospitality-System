<?php
include "header.php";
//require "config.php";
// This function is checking for room availability

 $q="SELECT rooms.room_type
     , room_availability.*
FROM
  room_availability
INNER JOIN rooms
ON room_availability.room_number = rooms.room_number
WHERE
  room_availability.status = '0'";
      
  $rs=mysql_query($q) or die(mysql_error());
 //mysql_fetch_array($rs);
//exit();
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>

<h2 align="center">Live Info of Available Beds And Wards</h2>
<table cellpadding="5" cellspacing="5" border="1"width="250PX">
<tr style="color:#000">
<td align="left" valign="top" style="font-weight:bold;">Available Wards</td>
<td align="left" valign="top" style="font-weight:bold">Ward Type</td>

<td align="left" valign="top" style="font-weight:bold">Available Beds</td>
</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['room_number']; ?></td>
<td align="left" valign="top"><?php echo $data['room_type']; ?></td>
<td align="left" valign="top"><?php echo $data['bed_occupied']; ?></td>
</tr>
<?php
}
?>
</table>

<?php
include "footer.php";
?>