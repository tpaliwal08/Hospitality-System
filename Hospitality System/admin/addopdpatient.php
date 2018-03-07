<?php
include ('header.php');
//require "config.php";
if(isset($_POST["submit"]))

{
  if($_POST['chk'])
  {
  //print_r($_POST['chk']);
echo	 $chkrs=implode(",",$_POST['chk']);
//exit();
}
	
    $query="INSERT INTO patients(p_firstname,p_lastname,pfather_name,p_age,p_email,p_mobile,p_address,created_date,modified_date,status)VALUES('".$_POST['pfname']."','".$_POST['plname']."','".$_POST['pfnm']."','".$_POST['page']."','".$_POST['pmail']."','".$_POST['pmob']."','".$_POST['paddress']."','".date("Y-m-d")."','".date("Y-m-d")."','1')";
  
   mysql_query($query) or die(mysql_error());
   $lastid=mysql_insert_id();
   
 echo $q2="INSERT INTO  opd_patients(patient_id,doctor_id,
                                disease,priscription,pathologytest)
                       VALUES(".$lastid.",'".$_POST['rdoc']."',
					   '".$_POST['disease']."',
					   '".$_POST['prescrip']."',
					       '$chkrs')";
						  // exit();
   mysql_query($q2) or die(mysql_error());
   echo "succsessfully Inserted";
  // {
//	  // echo $_POST['padmit'];
//	   //exit();
//	 if($_POST['padmit']=="yes")
//      {
//	  $pid=mysql_insert_id();
//	    header('location:admitrecord.php?pid='.$pid);
//		
//	  }
//	  else
//	  {
	     $pid=$lastid;
	  header('location:newopdpatientpayment.php?pid='.$pid); 
//	  }
//  }
   //else
   //echo "An error occublack, Please Resubmit the form";
   //header('location:adduser.php');

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
			
			
			     jQuery("#pfname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
			   
			    jQuery("#pfname").validate({
                    expression: "if (VAL.match(/^[a-zA-Z ]+$/) && VAL) return true; else return false;",
                    message: "Please enter only characters"
                });
				
                
				jQuery("#plname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				
				jQuery("#plname").validate({
                    expression: "if (VAL.match(/^[a-zA-Z ]+$/) && VAL) return true; else return false;",
                    message: "Please enter only characters"
                });
				
				jQuery("#pfnm").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				
				jQuery("#pfnm").validate({
                    expression: "if (VAL.match(/^[a-zA-Z ]+$/) && VAL) return true; else return false;",
                    message: "Please enter only characters"
                });
				
				 jQuery("#page").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				
				jQuery("#page").validate({
                    expression: "if (VAL.match(/^[0-99]*$/) && VAL) return true; else return false;",
                    message: "Please enter a valid age"
                });
				
				/*jQuery("#pmail").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
				*/
				
				
				jQuery("#pmob").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
				 
				 
				jQuery("#pmob").validate({
                    expression: "if (VAL.match(/^[7-9][0-9]{9}$/)) return true; else return false;",
                    message: "Should be a valid Mobile Number"
                });
				jQuery("#paddress").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
            });
            /* ]]> */
        </script>
</head>



<h2>New OPD Patient Info Form</h2>

<form action="" method="post" name="form1" enctype="multipart/form-data" onsubmit="return ValidateForm()">
<table  border="2">
<tr>
<td><label class="black">First Name</label>
</td>
<td><input type="text" name="pfname" id="pfname" /></td>
</tr>
<tr>
<td><label class="black">Last Name</label>
</td>
<td><input type="text" name="plname" id="plname" /></td>
</tr>
<tr>
<td><label class="black">Father's Name</label>
</td>
<td><input type="text" name="pfnm" id="pfnm" /></td>
</tr>
<tr>
<td><label class="black">Age</label>
</td>
<td><input type="text" name="page" id="page" /></td>
</tr>
<tr>
<td><label class="black">Email</label>
</td>
<td><input type="text" name="pmail" id="pmail"  />(optional)</td>
</tr>
<tr>
<td><label class="black">Mobile no.</label>
</td>
<td><input type="text" name="pmob" id="pmob"/></td>
</tr>
<tr>
<td><label class="black">Address</label>
</td>
<td><input type="text" name="paddress" id="paddress"  /></td>
</tr>
<tr>
<td><label class="black">Reffered Doctor</label>
</td>
<td><select name="rdoc" id="rdoc">
<option value="0">Please Select</option>
<?php
echo $q="SELECT doctors.firstname
     , doctors.lastname
     , doctors.specialization
     , opd_doctor.status
     , specialization.sname
     , specialization.sid
     , doctors.id
FROM
  doctors
INNER JOIN specialization
ON doctors.specialization = specialization.sid
INNER JOIN opd_doctor
ON doctors.id = opd_doctor.doctor_id WHERE doctors.status=1 AND opd_doctor.status='1'";
$r=mysql_query($q);
//$data=mysql_fetch_array($r);
//if($r)
//{
	

while($data=mysql_fetch_array($r))
{

	?>

<option value="<?php echo $data['id'];?>"> 
<?php echo $data['firstname']." ".$data['lastname']."(".$data['sname'].")";?>
</option>
<?php
}

//}else
//{
	echo "hi";
//}?>
</select></td>
</tr>
<tr>
<td><label class="black">Disease</label>
</td>
<td><input type="text" name="disease" id="disease"  /></td>
</tr>
<tr>
<td><label class="black">Prescription</label>
</td>
<td><label for="textarea"></label>
  <textarea name="prescrip" id="prescrip" cols="45" rows="5"></textarea></td>
</tr>
<tr>
<td><label class="black">Pathology Tests</label>
</td>
<td><?php $test=mysql_query("SELECT test_id,test_name FROM pathology_test WHERE status=1");
     while($tdata=mysql_fetch_array($test))
     {
	 ?>
	   
	   <?php echo $tdata['test_name']; ?><input value="<?php echo $tdata['test_name'];?>" name="chk[]" type="checkbox" /></br>
     <?php 
	 }
    ?>
</td>
</tr>
<tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="submit" />
</td>
</tr>

</table>
</form>

<div style="min-height:200px"></div>
<?php

include "footer.php";
?>