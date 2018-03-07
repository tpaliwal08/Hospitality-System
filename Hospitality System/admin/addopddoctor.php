<?php
include "header.php";

if(isset($_POST['submit']))
   {
  $query="INSERT INTO doctors
  (firstname,lastname,email,mobile,address,
    specialization,created_date,modified_date,status)
	VALUES('".$_POST['fname']."','".$_POST['lname']."',
	'".$_POST['email']."','".$_POST['mob']."',
	'".$_POST['raddress']."','".$_POST['spec']."',
	'".date("Y-m-d")."','".date("Y-m-d")."','1')";

     mysql_query($query) or die(mysql_error());
	$lastid=mysql_insert_id();
	 echo $q2="INSERT INTO opd(opd_id,comming_time,leaving_time)VALUES('".$lastid."','".$_POST['ctime']."','".$_POST['ltime']."')";
	 mysql_query($q2) or die(mysql_error());
	 echo "successfully Updated";
     //header('location:doctcreate.php');

}
?>
<!--<head>
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
    </head>-->
    <body>
            <form action="" name="form1" method="post" onSubmit="return ValidateForm()">
                <table >
                    <tr>
                        <td>
                            <label style="color:#000">First Name</label>
                        </td>
                        <td>
                            <input type="text" name="fname" id="fname" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <label style="color:#000"> Last Name</label>
                        </td>
                        <td>
                            <input type="text" name="lname" id="lname" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <label style="color:#000">Email ID</label>
                        </td>
                        <td>
                            <input type="text" name="email" id="email" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <label style="color:#000"> Mobile No.</label>
                        </td>
                        <td>
                            <input type="text" name="mob" id="mob" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label style="color:#000">Residendial Address
</label>                        </td>
                        <td>
                            <input type="text" name="raddress" id="raddress" />
                        </td>
                    </tr>
                    <tr>
                    <td><label style="color:#000">Specialization</label></td>
<td><select name="spec" id="spec">
<option value="0">Please Select</option>
<?php
$spec=mysql_query("SELECT sid,sname FROM specialization WHERE status=1");
while($sdata=mysql_fetch_object($spec))
{
	echo '<option value="'.$sdata->sid.'">'.($sdata->sname).'</option>';
}
?>
</select>
</td>
</tr>                    
                    <tr>
                        <td>
                            <label style="color:#000">Comming Time
                              </label>
                        </td>
                        <td>
                            <input type="text" name="ctime" id="ctime" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label style="color:#000">Leaving Time
                              </label>
                        </td>
                        <td>
                            <input type="text" name="ltime" id="ltime" />
                        </td>
                    </tr>
                      <tr>
                        <td>
                        </td>
                        <td>
                            <input type="submit" value="Submit" name="submit" id="submit" >
                        </td>
                    </tr>
                </table>
            </form>
            
        </div>
        
    </body>
	
	
	
	
	<?php
	   include "footer.php";
	?>
</html>
