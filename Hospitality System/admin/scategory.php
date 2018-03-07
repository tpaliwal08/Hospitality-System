<?php
include ('header.php');

if(isset($_POST['submit']))
{
	
		$query="INSERT INTO  staff_category(category_name,status)VALUES ('".$_POST['scatt']."','1')";
		if(mysql_query($query))
		header('location:scatcreate.php');
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
                jQuery("#scatt").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
               
            });
            /* ]]> */
        </script>
</head>


<h2>Staff Management</h2>
<form action="" method="post" name="form1" enctype="multipart/form-data">
<table style="color:#000" border="2">
<tr>
<td>Category Name</td><td><input type="text" name="scatt" id="scatt" ></td></tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
</tr>
</table>

</form>

<div style="min-height:200px;"></div>
<?php

include "footer.php";
?>