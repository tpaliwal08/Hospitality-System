<?php
include ('header.php');

//$errmsg = "";
if(isset($_POST['submit']))
{
	
		$query="INSERT INTO rooms(room_number,room_type,bed_limit,status)VALUES ('".$_POST['rno']."','".$_POST['rtype']."','".$_POST['bedlmt']."','1')";
		$r=mysql_query($query) or die(mysql_error());
		  
		  for($i=1;$i<=$_POST['bedlmt'];$i++)
		  {
		    
			 
		    $bed="INSERT INTO room_availability(room_number,bed_occupied,status)VALUES('".$_POST['rno']."','$i','0')";
			mysql_query($bed) or die(mysql_error());
			
    		
		  }
			
		header('location:roomcreat.php');
		//else
		//echo "An error occured, Please Resubmit the form";
        //header('location:addroom.php');

}


?><head>

        <script src="js/jquery-form-validate/lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="js/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script src="js/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
				jQuery("#rno").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Should be a number"
                });
				 jQuery("#rtype").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Please make a selection"
                });
				jQuery("#bedlmt").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Should be a number"
                });
                
            });
            /* ]]> */
        </script>

</head>



<h2>Wards Management</h2>
<form action="" method="post" name="form1" enctype="multipart/form-data">
<table align="center" height="300px" width="200px" border="2">
<tr style="color:#000">
<td>Ward Number
</td>
<td><input type="text" name="rno" id="rno"/></td>
</tr>
<tr style="color:#000">
<td>Ward Type
</td>
<td><select name="rtype" id="rtype">
<option value="0">Select</option> 
<?php
$cat=mysql_query("SELECT room_id,room_name FROM room_category WHERE status=1");
while($rdata=mysql_fetch_object($cat))
{
	echo '<option value="'.$rdata->room_id.'">'.($rdata->room_name).'</option>';
}
?>

</select></td>



</tr>
<tr style="color:#000">
<td>Bed Limit
</td>
<td><input type="text" name="bedlmt" id="bedlmt"  /></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" value="submit" name="submit" > </td>
</tr>
</table>


</form>
<div style="min-height:200px"></div>
<?php

include "footer.php";
?>