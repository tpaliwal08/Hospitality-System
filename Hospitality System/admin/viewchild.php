<?php
include "header.php";
//require "config.php";
// This function is checking for room availability

function is_available_room($room_number)
{
	//
	$room_rs = mysql_query("SELECT bed_limit FROM rooms WHERE room_number=".$room_number);
	$occupied_rs = mysql_query("SELECT count(*) as total_occupied FROM room_availability WHERE room_number=".$room_number." && status='1'");
	//
	$roomdata = mysql_fetch_object($room_rs);
	$occupieddata = mysql_fetch_object($occupied_rs);
	
	if($roomdata->bed_limit == $occupieddata->total_occupied)
	{
		// not avail
		return 0;
	}
	else
	{
		$num = intval($roomdata->bed_limit)-intval($occupieddata->total_occupied);
		return $num;
	}

}

$q="SELECT * FROM rooms WHERE room_type='child'";
      
$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>

<h2 align="center">Private Ward Details</h2>
<div style="float:right; font-size:24px"><a href="bedavailer.php">Beds Availability</a></div>
<table cellpadding="5" cellspacing="5" border="1"width="250PX">
<tr style="color:#000">
<td align="left" valign="top" style="font-weight:bold;">Ward Number</td>
<td align="left" valign="top" style="font-weight:bold">Ward Type</td>

<td align="left" valign="top" style="font-weight:bold">Bed Limit</td>

<td align="left" valign="top" style="font-weight:bold">Available</td>




</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#000">
<td align="left" valign="top"><?php echo $data['room_number']; ?></td>
<td align="left" valign="top"><?php echo $data['room_type']; ?></td>
<td align="left" valign="top"><?php echo $data['bed_limit']; ?></td>
<td align="left" valign="top" style="color:#0F3">
<?php 	$rn = $data['room_number']; 
		$chek = is_available_room($rn); 
		echo $chek.' Bed Available '; ?></td>
</tr>
<?php
}
?>
</table>


<div style="min-height:300px"></div>
