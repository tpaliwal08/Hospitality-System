<?php
include "header.php";
require "config.php";


$sid=$_GET['sid'];
$q="select doctors.*,specialization.sname from doctors inner join specialization on specialization.sid=doctors.specialization where specialization=".$sid;

$rs=mysql_query($q);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);
$rs2=mysql_query("SELECT sname FROM specialization where sid=$sid");

$data2=mysql_fetch_array($rs2);
?>

<div id="tempatemo_content_wrapper" class="width_cls">

    <div id="templatemo_content">
    
    	<div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/images/3.jpg" width="900" height="300" alt="" /> </a> <a href="#"><img src="images/images/5.jpg" width="900" height="300" alt="" /> </a> <a href="#"><img src="images/images/4.jpg" width="900" height="300" alt="" /> </a> <a href="#"><img src="images/images/2.jpg" width="900" height="300" alt="" /> </a> <a href="#"><img src="images/images/medi.jpg" width="900" height="300" alt="" /> </a> </div>
      </div>
        
        <div id="content_panel">
        	
            <div id="column_w610">
            
            	<div class="header_01">Our <?php echo ucfirst($data2['sname']); ?> Specialists</div>
                <table width="600" cellpadding="5" cellspacing="5" border="0" bgcolor="#003366" align="center">
<tr style="color:#FFFFFF">
<td align="left" valign="top" style="font-weight:bold">Name</td>
<td align="left" valign="top" style="font-weight:bold">Email</td>
<td align="left" valign="top" style="font-weight:bold">Contact Number</td>
<td align="left" valign="top" style="font-weight:bold">Residential Address</td>


</tr>
<?php
while($data = mysql_fetch_array($rs))
{
?>

<tr style="color:#FFFFFF">
<td align="left" valign="top"><?php echo $data['firstname']; ?>  <?php echo $data['lastname']; ?></td>

<td align="left" valign="top"><?php echo $data['email']; ?></td>
<td align="left" valign="top"><?php echo $data['mobile']; ?></td>
<td align="left" valign="top"><?php echo $data['address']; ?></td>

</tr>

<?php
}
?>
</table>
                
          <div class="section_01">
                	<!--<div class="top"></div>-->
                    <!--<p>We just have top doctors and the best surgeons with the finest medical skills with compassionate care working together to become the top medical centre in india. Offering a comprehensive array of clinical specialties, discover why our hospital is the top choice among medical centres in indore for you healthcare needs.</p>-->    
                    
                   <!-- <div class="bottom"></div>-->                
                </div>
                
               <!-- <p>Nunc fringilla congue congue. In blandit nisl sit amet diam consectetur eleifend. Nunc eget felis nisl, sodales facilisis erat. Vestibulum nec lacus sem, ac ullamcorper tortor. Nullam eleifend, arcu nec iaculis dapibus, urna metus dictum lectus, vel elementum enim felis vel odio.</p>
                
                <ul class="list_with_icon">
                	<li>Integer tempor, libero quis laoreet dapibus, quam mauris hendrerit  urna, vel feugiat dolor lectus non velit. Fusce at nisl libero, ac  fringilla risus.</li>
                    <li>Proin non velit nec enim volutpat euismod. Phasellus lorem velit, porttitor non iaculis in, euismod a metus. Nullam orci odio, dignissim a egestas ac, <a href="#">sollicitudin in quam</a>.</li>
              </ul>-->
            
            </div> <!-- end of column w610 -->
            
            <div id="column_w290">
            
            	<div class="header_02">OPD Appointment</div>
                
                	<div class="news_section">
                        <div class="news_content">
                        	<div class="header_05">Contact Our OPD for Appointment
                            <p class="opd2">Now You can call us on +0731-1234567890 and take apointment.</p>
                            
                            </div>
                            
                        </div>
                        
                        <div class="cleaner"></div>
                    </div>
                    
                  
                
                <!--<div class="header_02">Admin Login</div>
                	
                <div class="column_w290_content">
                
                    <form action="login1.php" name="myform" method="post" >
<table align="center" border="0">
<tr class="fieldgroup">
<td>User name</td>
<td><input type="text" name="uname" size="20"></td>
</tr>
<tr>
<td class="fieldgroup">Password</td>
<td><input type="password" name="password"  size="20"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit" class="submit"></td>
</tr>
</table>
</form>
				
                </div>            
            </div> --><!-- end of column 290 -->
            
            <div class="cleaner"></div>
            
        </div> <!-- end of content panel -->
        
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    
</div> <!-- end of content wrapper -->
<?php

  include "footer.php";

?>