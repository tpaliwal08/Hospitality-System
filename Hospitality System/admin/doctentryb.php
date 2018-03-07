<?php
include "header.php";

if(isset($_POST['submit']))
{
     $query="INSERT INTO doctors(firstname,lastname,email,mobile,address,specialization,created_date,modified_date,status)VALUES('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['mob']."','".$_POST['raddress']."','".$_POST['spec']."','".time()."','".time()."','".$_POST['stts']."')";

     if(mysql_query($query))
     header('location:doctcreate.php');

}
?><head>

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
  $("#form1").validate({
         debug: false,
   rules: {
    fname: "required",
	lname: "required",
	mob: "required",
	 raddress: "required",
    stts: "required",
    email: {
     required: true,
     email: true
    }
	},
   messages: {
    fname: "Please enter the first name",
	lname: "Please enter the last name",
	mob: "Please enter a valid mobile no.",
	raddress: "Please enter the address",
    email: "Please enter a valid email address.",
	stts: "Please enter the status",
   },
   submitHandler: function(form) {
 
    $.post('nextstep.php', $("#form1").serialize(), function(data) {
     $('#result').html(data);
    });
   }
  });
 });
</script>
<style>
 label.error { width: 250px; display: inline; color: red;}
</style>
</head>

<h2>Doctors Entry</h2>
<form action="" method="post" name="form1" id="form1" enctype="multipart/form-data">
 
<label style="font-size:16px; margin:65px;" align="center">First Name

<input type="text" name="fname" id="fname" value="" size="20" class="required"/><br />
<br /></label>



<label style="font-size:16px; margin-left:65px;" align="center">Last Name

<input type="text" name="lname" id="lname"/></label>
<br />
<br />

<label style="font-size:16px; margin-left:103px;" align="center">
Email
<input type="text" name="email" id="email"/></label>
<br />
<br />

<label style="font-size:16px; margin-left:96px;" align="center">
Mobile
<input type="text" name="mob" id="mob"/></label><br />
<br />




<label style="font-size:16px; margin-left:7px;" align="center">
Residential Address
<input type="text" name="raddress" id="raddress"/></label>
<br />
<br />

<label style="font-size:16px; margin-left:50px" align="center">
Specialization
<select name="spec" id="spec">
<?php
$spec=mysql_query("SELECT sid,sname FROM specialization WHERE status=1");
while($sdata=mysql_fetch_object($spec))
{
	echo '<option value="'.$sdata->sname.'">'.($sdata->sname).'</option>';
}
?>
</select></label>
<br />
<br />


<label style="font-size:16px; margin-left:100px;" align="center">
Status
<input type="text" name="stts" id="stts" /></label>
<br />
<br />



<label style=" margin-left:200px;"><input type="submit" name="submit" value="submit" /></label>


</form>

<div id="result"></div>