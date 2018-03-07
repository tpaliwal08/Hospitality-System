<?php

include "header.php";
$sql="select * from staff_category";
$rs=mysql_query($sql)or die(mysql_error());
?>
<div style="float:left; padding-left:30px"><h2>Staff Members</h2>
<ul>
<?php 
//$i=0;
while($data=mysql_fetch_object($rs)){//$i++; ?>
<li style="font-size:16px">
<a href="viewstaffmembers.php?cid=<?php echo $data->category_id; ?>"><?php echo ucfirst($data->category_name);?></a></li>

<?php
//if($i%7 == 0)
echo '</ul><ul>';

 } ?>
</ul>
				
			</div>
			
			<div style="min-height:400px"></div>
			<?php 
			include "footer.php";
			?>