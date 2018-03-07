<?php
   include "header.php";

if(isset($_POST['submit']))
    {
         
    $query="INSERT INTO specialization(sname,status)VALUES('".$_POST['sname']."','1')";
	
	if(mysql_query($query))
	header('location:spec_create.php');
	//else
	//header('location:specentry.php');

}
?><head>

        <script src="js/jquery-form-validate/lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="js/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script src="js/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript">
        </script>
        <script type="text/javascript">
		jQuery (function() {
		jQuery("#sname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				
		});
				</script>
                </head>





<h2 align="center">Specialization Category Entry</h2>
<form action="" method="post" name="form1" enctype="multipart/form-data">
<table align="center" border="2">
<tr>
<td><label class="black">Category Name</label></td>
<td><input type="text" name="sname" id="sname" /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="submit"/>
</td>
</tr>
</table>

</form>

<?php
include "footer.php";
?>