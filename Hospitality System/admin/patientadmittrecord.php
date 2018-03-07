<?php
include ('header.php');

//$errmsg = "";
if(isset($_POST['submit']))
{
	//if(empty($_POST['rno']))
		//$errmsg =  "please enter room number <br>";

	//if(empty($_POST['stts']))
		//$errmsg .=  "please enter status <br>";

	//if($errmsg == "")
	//{
		$query="INSERT INTO patients(p_firstname,p_lastname,pfather_name,p_age,p_email,p_mobile,p_address,admitted,created_date,modified_date,status)VALUES('".$_POST['pfname']."','".$_POST['plname']."','".$_POST['pfnm']."','".$_POST['page']."','".$_POST['pmail']."','".$_POST['pmob']."','".$_POST['paddress']."','".$_POST['padmitt']."','".time()."','".time()."','".$_POST['stts']."')";
		if(mysql_query($query))
		
		  {
		    if($_POST['padmitt']="Yes")
			  {
				   
		header('location:a.php');
		//else
		//echo "An error occured, Please Resubmit the form";
        //header('location:addroom.php');
	//}

}


?>



<h2>Add Patient </h2>
<form action="" method="post" name="form1" enctype="multipart/form-data">
<table align="center" height="300px" width="200px" border="0">
<tr>
<td>First Name
</td>
<td><input type="text" name="pfname" /></td>
</tr>
<tr>
<td>Last Name
</td>
<td><input type="text" name="plname" /></td>
</tr>
<tr>
<td>Father's Name
</td>
<td><input type="text" name="pfnm" /></td>
</tr>
<tr>
<td>Age
</td>
<td><input type="text" name="page" /></td>
</tr>
<tr>
<td>Email
</td>
<td><input type="text" name="pmail" /></td>
</tr>
<tr>
<td>Mobile no.
</td>
<td><input type="text" name="pmob" /></td>
</tr>
<tr>
<td>Address
</td>
<td><input type="text" name="paddress" /></td>
</tr>
<tr>
<td>Admitt
</td>
<td><input type="radio" name="padmitt"  value="Yes"/><br>
<input type="radio" name="padmitt"  value="No"/></td>
</tr>
<tr>
<td>Status
</td>
<td><input type="text" name="stts"  /></td>
</tr>
<tr>
<td align="center"><input type="submit" value="submit" name="submit" > </td>
</tr>
</table>


</form>
<?php

include "footer.php";
?>
