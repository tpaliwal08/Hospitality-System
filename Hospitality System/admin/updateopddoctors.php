<head>
        <script src="js/jquery-form-validate/lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="js/jquery-form-validate/javascripts/jquery.validate.js" type="text/javascript">
        </script>
        <script src="js/jquery-form-validate/javascripts/jquery.validation.functions.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#fname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the First Name"
                });
				
				jQuery("#fname").validate({
                    expression: "if (VAL.match(/^[a-zA-Z]+$/) && VAL) return true; else return false;",
                    message: "Please enter only characters"
                });
				jQuery("#lname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Last Name"
                });
				jQuery("#lname").validate({
                    expression: "if (VAL.match(/^[a-zA-Z]+$/) && VAL) return true; else return false;",
                    message: "Please enter only characters"
                });
				
				jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
               jQuery("#mob").validate({
                    expression: "if (VAL.match(/^[7-9][0-9]{9}$/)) return true; else return false;",
                    message: "Should be a valid Mobile Number"
                });
				jQuery("#raddress").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the address"
                });
				 jQuery("#spec").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Please make a selection"
                });
				
            });
            /* ]]> */
        </script>
        </head>
<?php
include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}

define('sql',"hi");
 $id = $_POST['id'];
 $ctime=$_POST['ctime'];
 $ltime=$_POST['ltime'];
//exit();
 $sql="UPDATE opd_doctor SET comming_time='$ctime',
                  leaving_time='$ltime'
	          WHERE
	          doctor_id='$id'";
			  //exit();
	echo mysql_query($sql) or die(mysql_error());
	//exit();
	echo "successfully Updated";
	header("location:viewopddoctor.php");
	

?>
<?php
  
  include "footer.php";
  
?>