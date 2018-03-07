<?php
include ('header.php');

if(isset($_POST['submit']))
  
    {
		$query="INSERT INTO room_category(room_name,status)VALUES ('".$_POST['rname']."','1')";
		if(mysql_query($query))
		{
		header('location:roomcatcreate.php');
		}
		else
		{
		echo "An error occured, Please Resubmit the form";
        //header('location:addroom.php');
		}


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
				jQuery("#rname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				
                
            });
            /* ]]> */
        </script>

</head>


<h2>Add new room category</h2>
<form action="" method="post" name="form1" enctype="multipart/form-data">
<table align="center" height="150px" width="200px" border="0">
<tr style="color:#000">
<td>Category Name
</td>
<td><input type="text" name="rname" id="rname"/></td>
</tr>
<tr>
<td align="center"><input type="submit" value="submit" name="submit" > </td>
</tr>
</table>


</form>
<div style="min-height:200px"></div>
<?php

include "footer.php";
?>