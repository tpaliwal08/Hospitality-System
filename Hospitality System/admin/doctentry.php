<?php
include "header.php";

if(isset($_POST['submit']))
{
 $query="INSERT INTO doctors(firstname,lastname,email,
	    mobile,address,specialization,Available_opd,
		created_date,modified_date,status)
		VALUES('".$_POST['fname']."','".$_POST['lname']."',
		'".$_POST['email']."','".$_POST['mob']."',
		'".$_POST['raddress']."','".$_POST['spec']."',
		'".$_POST['aopd']."','".date("Y-m-d")."',
		'".date("Y-m-d")."','1')";

     mysql_query($query);
	 if($_POST['aopd']="yes")
	 
	 {
	 $lastid=mysql_insert_id();
	 $q2="INSERT INTO opd_doctor(doctor_id,comming_time,leaving_time)VALUES('".$lastid."','".$_POST['ctime']."','".$_POST['ltime']."')";
	 mysql_query($q2) or die(mysql_error());
	 header('location:doctcreate.php');
	 }else
     header('location:doctcreate.php');

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
                              </label> 
                         </td>
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
