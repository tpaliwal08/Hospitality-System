<?php

include "header.php";
$sql="select * from room_category";
$rs=mysql_query($sql)or die(mysql_error());
?>
<div style="padding-left:30px; float:left">
<h2>Ward Availability</h2>
<ul style="font-size:14px">
<?php 
//$i=0;
while($data=mysql_fetch_object($rs)){//$i++; ?>
<li style="font-size:16px">
<a href="viewrooms.php?rid=<?php echo $data->room_id; ?>"><?php echo ucfirst($data->room_name);?></a></li>
<?php
//if($i%7 == 0)
echo '</ul><ul>';
 } ?>
</ul>				
			</div>
			
            <!--<div style="float:left"><h2><a href="bedavailability.php">Live WARD and Bed Availability</a></h2></div>
-->			<?php 
			include "footer.php";
			?>