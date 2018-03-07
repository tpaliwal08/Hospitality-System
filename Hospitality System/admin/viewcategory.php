<?php
 
   include "header.php";

   $sql="SELECT * FROM staff_category Where status='1'";
 $query=mysql_query($sql);

 ?> 
 <table cellpadding="5" cellspacing="5" border="1"width="250PX">
<tr style="color:#000">
<td align="left" valign="top" style="font-weight:bold;">Category Name</td>
<td align="left" valign="top" style="font-weight:bold">Edit</td>
<td align="left" valign="top" style="font-weight:bold">Delete</td>
</tr>
<?php

  while($data=mysql_fetch_array($query))
  
   {
   
 ?>
 
 <tr style="color:#000">
<td align="left" valign="top"><?php echo $data['category_name']; ?></td>
<?php echo '<td><a href="editcategory.php?cid=' . $data['category_id'] . '">Edit</a></td>'; ?>
<?php echo '<td><a href="deletecategory.php?cid=' . $data['category_id'] . '">Edit</a></td>'; ?>
</tr>
<?php
   
   }
?>

</table>



