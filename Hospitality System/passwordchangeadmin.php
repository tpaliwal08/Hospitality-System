<?php

include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}
if(isset($_POST['submit']))
   
   {
          if(isset($_POST['ncpassword']))	  {
		  
		  }
   
define('sql',"hi");
 $uname = $_SESSION['username'];
 $npassword=$_POST['npassword'];
 $ncpassword=$_POST['ncpassword'];
 $opassword=$_POST['opassword'];
$query="SELECT password from user where username='$uname'";
$res=mysql_query($query);
$rs=mysql_fetch_array($res);
$password=$rs['password'];
if($opassword=$password)
    {
     if($npassword=$ncpassword)
          {
$sql="UPDATE user SET password='$ncpassword'
	          WHERE
	          username='$uname'";
	 mysql_query($sql);
	
	echo "successfully Updated";
	//header("location:editadmin.php");
		  }else
			  echo "new password do not match with confirm password";
	  }
	  else
		  echo "old password is incorrect";
}
?>
<head>
 <script src="js/jquery-form-validate/lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="js/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script src="js/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript">
        </script>
        <script type="text/javascript">
		
		
		 jQuery(function(){
		
		       jQuery("#opassword").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the old password "
                });
				 jQuery("#npassword").validate({
                    expression: "if (VAL.length > 5 && VAL) return true; else return false;",
                    message: "Please enter a valid Password"
                });
                jQuery("#ncpassword").validate({
                    expression: "if ((VAL == jQuery('#npassword').val()) && VAL) return true; else return false;",
                    message: "Confirm password field doesn't match the password field"
                });
			});
				</script>
</head>
<body>
<table align="center" border="1" >
<form name="form1" method="post" enctype="multipart/form-data" action="">
<tr>
<td>Enter old password</td><td><input name="opassword" id="opassword" type="text"></td>
</tr>
<tr>
<td>Enter new password </td><td><input name="npassword" id="npassword" type="text"></td>
</tr>
<tr>
<td>Confirm new password</td><td><input name="ncpassword" id="ncpassword" type="text"></td>
</tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="submit"></td></tr>
</form> 



</form>
</body>
<?php
   include "footer.php";
  
?>
</html>