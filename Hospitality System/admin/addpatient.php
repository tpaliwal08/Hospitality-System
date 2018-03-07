<?php
include ('header.php');
//require "config.php";
if(isset($_POST["submit"]))

{
    $query="INSERT INTO patients(p_firstname,p_lastname,pfather_name,p_age,p_email,p_mobile,p_address,created_date,modified_date,status)VALUES('".$_POST['pfname']."','".$_POST['plname']."','".$_POST['pfnm']."','".$_POST['page']."','".$_POST['pmail']."','".$_POST['pmob']."','".$_POST['paddress']."','".date("Y-m-d")."','".date("Y-m-d")."','1')";
  
   if(mysql_query($query))
   {
	  // echo $_POST['padmit'];
	   //exit();
	  $pid=mysql_insert_id();
	    header('location:admitrecord.php?pid='.$pid);
		
  }
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
        <script>
        // Declaring valid date character, minimum year and maximum year
var dtCh= "-";
var minYear=1900;
var maxYear=2100;

function isInteger(s){
	var i;
    for (i = 0; i < s.length; i++){   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

function stripCharsInBag(s, bag){
	var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++){   
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function daysInFebruary (year){
	// February has 29 days in any year evenly divisible by four,
    // EXCEPT for centurial years which are not also divisible by 400.
    return (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
}
function DaysArray(n) {
	for (var i = 1; i <= n; i++) {
		this[i] = 31
		if (i==4 || i==6 || i==9 || i==11) {this[i] = 30}
		if (i==2) {this[i] = 29}
   } 
   return this
}

function isDate(dtStr){
	var daysInMonth = DaysArray(12)
	var pos1=dtStr.indexOf(dtCh)
	var pos2=dtStr.indexOf(dtCh,pos1+1)
	var strYear=dtStr.substring(0,pos1)
	var strMonth=dtStr.substring(pos1+1,pos2)
	var strDay=dtStr.substring(pos2+1)
	strYr=strYear
	if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1)
	if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1)
	for (var i = 1; i <= 3; i++) {
		if (strYr.charAt(0)=="0" && strYr.length>1) strYr=strYr.substring(1)
	}
	month=parseInt(strMonth)
	day=parseInt(strDay)
	year=parseInt(strYr)
	if (pos1==-1 || pos2==-1){
		alert("The date format should be : yyyy-mm-dd")
		return false
	}
	if (strMonth.length<1 || month<1 || month>12){
		alert("Please enter a valid month")
		return false
	}
	if (strDay.length<1 || day<1 || day>31 || (month==2 && day>daysInFebruary(year)) || day > daysInMonth[month]){
		alert("Please enter a valid day")
		return false
	}
	if (strYear.length != 4 || year==0 || year<minYear || year>maxYear){
		alert("Please enter a valid 4 digit year between "+minYear+" and "+maxYear)
		return false
	}
	if (dtStr.indexOf(dtCh,pos2+1)!=-1 || isInteger(stripCharsInBag(dtStr, dtCh))==false){
		alert("Please enter a valid date")
		return false
	}
return true
}

function ValidateForm(){
	var dt=document.form1.cdate
	if (isDate(dt.value)==false){
		dt.focus()
		return false
	}
    return true
 }
function ValidateForm(){
	var dt=document.form1.mdate
	if (isDate(dt.value)==false){
		dt.focus()
		return false
	}
    return true
 }
 </script>
</head>



<h2>New Patient Info Form</h2>

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