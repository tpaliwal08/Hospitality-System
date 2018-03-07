<?php
include "header.php";
//require "config.php";
if(isset($_POST['submit']))
{
$rs="SELECT bed_occupied FROM room_availability WHERE room_number=".$_POST['rnfb']." && status='0'";
 $query=mysql_query($rs);
?>
<table>
<tr><h2>Room No. <?php echo $_POST['rnfb'];  ?></h2>
<td>Available Beds</td>
</tr>
<?php
while($beds=mysql_fetch_array($query))
{
?>
<tr>
<td style="color:#0C3"><?php echo "Bed number".$beds['bed_occupied']." ->  available";?></td>
</tr>
<?php
}
?>
</table>
<?php

}

?>

<?php
  include "footer.php";
?>