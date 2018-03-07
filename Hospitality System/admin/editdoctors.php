<?php

include "header.php";
//include "config.php";
if(isset($_GET['id']))
//error_reporting(E_ALL ^ E_NOTICE);
//if(isset($id) ) //here is the isset funtion i m closing it in last of the programm.
 //{
 
 
  {
  
}
$id='';
  define('id',"Hello");
$id = (int)$_GET['id'];


$sql = "SELECT * FROM doctors
	where id='$id'";
	      $result = mysql_query($sql);
	      $row = mysql_fetch_array($result);

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
				jQuery("#address").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the address"
                });
				 jQuery("#spec").validate({
                    expression: "if (VAL != '0') return true;",
                    message: "Please make a selection"
                });
				
            });
            /* ]]> */
        </script>
			<script language = "Javascript">
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
	var dt=document.form1.mdate
	if (isDate(dt.value)==false){
		dt.focus()
		return false
	}
    return true
 }
</script>
</head>
<h2>Edit Doctors</h2>
<form method="post" action="updatedoctors.php" name="form1" onsubmit="return ValidateForm()">
	       <input type="hidden" name="id" value="<?php echo $row['id'];?>">
	      <table> 
	         <tr> 
             <td>First name</td>
	          <td>
	            <input type="text" id="fname" name="fname"
	        size="20" value="<?php echo $row['firstname']; ?>">
	          </td>
	        </tr>
            <tr> 
             <td>Last name</td>
	          <td>
	            <input type="text" id="lname" name="lname"
	        size="20" value="<?php echo $row['lastname']; ?>">
	          </td>
	        </tr>

	        <tr>
	          <td>Email</td>
	          <td>
	            <input type="text" id="email" name="email" size="20"
	          value="<?php echo $row['email']; ?>">
	          </td>
	        </tr>
             <tr>
	          <td>Mobile No.</td>
	          <td>
	            <input type="text" id="mob" name="mob" size="20"
	          value="<?php echo $row['mobile']; ?>">
	          </td>
	        </tr>
            <tr>
	          <td>Address</td>
	          <td>
	            <input type="text" id="address" name="address" size="20"
	          value="<?php echo $row['address']; ?>">
	          </td>
	        </tr>
            <?php /*?><tr>
                    <td><label style="color:#000">Specialization</label></td>
<td><select name="spec" id="spec">
<option><?php echo $row['specialization']?></option>
<?php
$spec=mysql_query("SELECT sid,sname FROM specialization WHERE status=1");
while($sdata=mysql_fetch_object($spec))
{
	echo '<option value="'.$sdata->sid.'">'.($sdata->sname).'</option>';
}
?>
</select>
</td>
</tr><?php */?>s
	        <tr>
	          <td align="right">
	            <input type="submit"
	          name="submit" value="Update">
	          </td>
	        </tr>
	      
	      </table>
          </form>
	<?php
	 //mysql_close();
	  //}  //here isset function closing 
	?>