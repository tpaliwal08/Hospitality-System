<?php
include "header.php";
//require "config.php";



//$q="SELECT  * FROM patients WHERE admitted='yes' and status='1'";
define('id',"Hello");
$id = (int)$_GET['id'];

$sql ="SELECT patient_payment.*
     , opd_patients.pathologytest
     , opd_patients.pathology_fee
FROM
  patient_payment patient_payment
INNER JOIN opd_patients
ON patient_payment.patient_id = opd_patients.patient_id WHERE patient_payment.patient_id='$id'";
	      $result = mysql_query($sql) or die(mysql_error());
	      $data = mysql_fetch_array($result);
//$res=mysql_fetch_assoc($rs);
//print_r($rs);

?>
<body>
<table width="58%" border="2" cellspacing="5" cellpadding="5" align="center">
<tr>
    <td height="45">Patient Serial No.</td>
    <td><?php echo $id; ?></td>
  </tr>
  <tr>
  <tr>
    <td height="45">Date</td>
    <td><?php echo date('Y-m-d'); ?></td>
  </tr>
  <tr>
   <tr>
    <td height="45">Patient Name</td>
    <td><?php echo $data['p_firstname']; ?> <?php echo $data['p_lastname']; ?></td>
  </tr>
  <tr>
    <td height="45">Father's Name</td>
    <td><?php echo $data['pfather_name']; ?></td>
  </tr>
  <tr>
    <td height="45">Contact No.</td>
    <td><?php echo $data['mobile']; ?></td>
  </tr>
  <tr>
    <td height="45">Pathology Test</td>
    <td><?php echo $data['pathologytest']; ?></td>
  </tr>
  <tr>
    <td height="45">Doctor Fee</td>
    <td><?php echo $data['doctor_fee']; ?></td>
  </tr>
  <tr>
    <td height="45">Medicine Fee</td>
    <td><?php echo $data['medical_fee']; ?></td>
  </tr>
  <tr>
    <td height="45">Pathology Fee</td>
    <td><?php echo $data['pathology_fee']; ?></td>
  </tr>
  <tr>
    <td height="45">Deposited</td>
    <td><?php echo $data['advance_amount']; ?></td>
  </tr>
  <tr>
    <td height="45">Last Updated</td>
    <td><?php echo $data['modified_date']; ?></td>
<?php /*?><?php echo '<td><a href="paymentmodify.php?id=' . $data['patient_id'] . '">Payment</a></td>'; ?>
<?php echo '<td><a href="dischargepatient.php?id=' . $data['patient_id'] . '">Discharge</a></td>'; ?><?php */?>
</tr>
<tr>
<td><b>Total Bill Payment</b></td>
<td><b><?php echo $data['total_amount']; ?></b></td>
</tr>
</table>
<a href="javascript:void(0);" onclick="printPage();">Print</a> 

<script type="text/javascript">
 function printPage(){
        var tableData = '<table border="0">'+document.getElementsByTagName('table')[0].innerHTML+'</table>';
        var data = '<button onclick="window.print()">Print</button>'+tableData;       
        myWindow=window.open('','','width=1200,height=600');
        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.document.write(data);
        myWindow.focus();
    };
 </script>
</body>
<?php

   include "footer.php";
?>
</html>