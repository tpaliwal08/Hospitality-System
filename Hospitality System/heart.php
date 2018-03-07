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

<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Our Doctors</span> Team</h2>
          <div class="clr"></div>
<h3 align="center" style="color:#0066CC; margin-left:100px;">Our <?php echo ucfirst($data2['sname']); ?> Specialists</h3>
<div><p>
 KDJF DK DJjfdk jkdjf fdkfjdf lsdkfjdsf jdfkdsjfei fmsdf kjfiejf dffjiejf dfkjfiejf dkfjf eifjkdfd fkfjeife fekjfiefj efiejfke fjeifjfk fjeifje fefjie fjiefjei fjeifje fjiefjei fjfjekfjsfjsfkf fjifjie fjefjeif efiejfie.
</p>
</div></div>
<div style="float:right;">
<table width="500" cellpadding="5" cellspacing="5" border="0" bgcolor="#0066CC" align="center">
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
</div>
<label style="float:right"><img src="specialization images/Heart-Doctor-2.gif.png" width="150px" height="125px" /></label>
</div>

<?php

    include "footer.php";
?>