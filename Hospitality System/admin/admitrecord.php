<?php
include ('header.php');

function is_available_room($room_number)
{
	//
	$room_rs = mysql_query("SELECT bed_limit FROM rooms WHERE room_number=".$room_number);
	$occupied_rs = mysql_query("SELECT count(*) as total_occupied FROM room_availability WHERE room_number=".$room_number." && status='1'");
	//
	$roomdata = mysql_fetch_object($room_rs);
	$occupieddata = mysql_fetch_object($occupied_rs);
	
	if($roomdata->bed_limit == $occupieddata->total_occupied)
	{
		// not avail
		return 0;
	}
	else
	{
		$num = intval($roomdata->bed_limit)-intval($occupieddata->total_occupied);
		return $num;
	}

}


if(isset($_POST["submit"]))

{

if(isset($_GET['pid']))
{
	$pid = $_GET['pid'];
	$check = is_available_room($_POST['pwno']);
	if(empty($check))	
	{
		$_SESSION['msg_show'] = "This Ward is Full select any other ward";
	}
	else
	{
	
    	 $query="INSERT INTO patient_admit_record(patient_id,admit_date,room_type,room_number,bed_number,charge_per_day)VALUES (".$pid.",".$_POST['padmitdate'].",'".$_POST['prtype']."',".$_POST['pwno'].",".$_POST['pbedno'].",".$_POST['cpd'].")";
   	 	if(mysql_query($query))
		{
     		// insert to room_availability table
		 //$q="INSERT INTO room_availability(room_number,bed_occupied)VALUES(".$_POST['pwno'].",".$_POST['pbedno'].")";
		 $q="UPDATE room_availability SET status='1' WHERE room_number='".$_POST['pwno']."' AND bed_occupied='".$_POST['pbedno']."'";
			
			mysql_query($q);
			//echo $pid=mysql_insert_id();
			//exit();
			$_SESSION['msg_show'] = "Successfully inserted!!";
			header('location:newpatientpayment.php?pid='.$pid);
				
		}
   }
}
   //else
   //echo "An error occured, Please Resubmit the form";
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
                jQuery("#ValidField").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field"
                });
                jQuery("#pwno").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
				jQuery("#pbedno").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
				jQuery("#cpd").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Please enter a valid number"
                });
				
                
                jQuery("#ValidEmail").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID"
                });
                jQuery("#ValidPassword").validate({
                    expression: "if (VAL.length > 5 && VAL) return true; else return false;",
                    message: "Please enter a valid Password"
                });
                jQuery("#ValidConfirmPassword").validate({
                    expression: "if ((VAL == jQuery('#ValidPassword').val()) && VAL) return true; else return false;",
                    message: "Confirm password field doesn't match the password field"
                });
                jQuery("#prtype").validate({
                    expression: "if (VAL != '0') return true; else return false;",
                    message: "Please make a selection"
                });
                jQuery("#ValidMultiSelection").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please make a selection"
                });
                jQuery("#ValidRadio").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please select a radio button"
                });
                jQuery("#ValidCheckbox").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please check atleast one checkbox"
                });
				
            });
            /* ]]> */
        </script>
       
<!--			<script language = "Javascript">
/**
 * DHTML date validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/datevalidation.asp)
 */
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
	var dt=document.form1.padmitdate
	if (isDate(dt.value)==false){
		dt.focus()
		return false
	}
    return true
 }

</script>-->
<link rel="stylesheet" href="datepicker/css/base/jquery.ui.all.css">
<script src="datepicker/jquery-1.6.2.js"></script>
<script src="datepicker/jquery.ui.core.js"></script>
<script src="datepicker/jquery.ui.widget.js"></script>
<script src="datepicker/jquery.ui.datepicker.js"></script>
<script>
      $(function() {
	      $( "#padmitdate" ).datepicker({ dateFormat: 'yy-mm-dd' });	      
      });
</script>
</head>

<h2>Patient Admit Record</h2>


<form action="" method="post" name="form1" enctype="multipart/form-data" onsubmit="return ValidateForm()">
<table border="0">
<tr >
<td>Admit Date
</td>
<td><input type="text" name="padmitdate"  id="padmitdate"/>(format YYYY-MM-DD)</td>
</tr>
<tr>
<td>Ward Type
</td>
<td>
<select name="prtype" id="prtype">
<option value="0">Please Select</option>
<?php
$cat=mysql_query("SELECT room_id,room_name FROM room_category WHERE status=1");
while($rdata=mysql_fetch_object($cat))
{
	echo '<option value="'.$rdata->room_id.'">'.($rdata->room_name).'</option>';
}
?>
</select>
</td>
</tr>
<tr>
<td>Ward Number
</td>
<td><input type="text" name="pwno" id="pwno"  /></td>
</tr>
<tr>
<td>Bed Number
</td>
<td><input type="text" name="pbedno"  id="pbedno" /></td>
</tr>
<tr>
<tr>
<td>Charges Per Day
</td>
<td><input type="text" name="cpd"  id="cpd" /></td>
</tr>
<tr>
<tr>
<td>
<input type="submit" name="submit" value="submit" />
</td>
</tr>

</table>


</form>
<div style="color:#FF0000"><?php if(!empty($_SESSION['msg_show']))
	echo $_SESSION['msg_show'];

 ?></div>
 
 <div style="min-height:300px"></div>
<?php

include "footer.php";
?>