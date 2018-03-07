<?php
//Start session
	session_start();
	
	//Check whether the session variable username is present or not
	if(!isset($_SESSION['username']) || (trim($_SESSION['username']) == '')) {
		header("location:index.php");
		exit();
	}
require 'config.php';
?>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
<p style="color:#FFF">Welcome, <strong style="color:#F00">
   <?php 
   if(isset($_SESSION['username']))
	echo  $_SESSION['username']; ?>
    </strong> [ <a href="adminlogout.php">logout</a> ]</p>
    </div>
			</div>
		<div id="nav">
			<ul>
				<li class="upp"><a href="#">Manage Doctors</a>
					<ul>
						<li style="width:180px">&#8250; <a href="doctentry.php">Add Doctor</a></li>
						<li style="width:180px">&#8250; <a href="view_doctor.php">View all</a></li>
						<li style="width:180px">&#8250; <a href="specentry.php">Add Specialization</a></li>
                        <li style="width:180px">&#8250; <a href="viewdoctorspecialization.php">View Specialization</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#">Manage Wards</a>
					<ul><li style="width:180px">&#8250; <a href="addroomcategory.php">New Ward Category</a></li>
						<li style="width:180px">&#8250; <a href="addroom.php">Wards entry</a></li>
						<li style="width:180px">&#8250; <a href="view_wards.php">View all</a></li>
						
					</ul>
				</li>
				<li class="upp"><a href="#">Manage Other Staff</a>
					<ul>
						<li style="width:180px">&#8250; <a href="scategory.php">Add category</a></li>
						<li style="width:180px">&#8250; <a href="viewstaffcategory.php">View Category</a></li>
						<li style="width:180px">&#8250; <a href="smember.php">Add staff members</a></li>
						<li style="width:180px">&#8250; <a href="viewstaff.php">View Full Staff</a></li>
						
					</ul>
				</li>
				<li class="upp"><a href="#">Manage Patient</a>
					<ul>
						<li style="width:180px">&#8250; <a href="addpatient.php">Admit New Patient</a></li>
						<li style="width:180px">&#8250; <a href="View_patients.php">View Admitted Patients </a></li>
						
					</ul>
				</li>
			
		<ul>
				<li class="upp"><a href="#">Manage Administrator</a>
					<ul>
						<li style="width:180px">&#8250; <a href="adduser.php">Add new user</a></li>
						<li style="width:180px">&#8250; <a href="view_admin.php">View all</a></li>
						<li style="width:190px">&#8250; <a href="passwordchangeadmin.php">Change your password</a></li>
					</ul></li>
                    </ul>
            <ul>
				<li class="upp"><a href="#">Ward Availability</a>
                <ul>
						<li style="width:180px">&#8250; <a href="view_wards.php">Check Availability</a></li>
											</ul></li>
                    </ul>
           <ul>
				<li class="upp"><a href="#">Blood Bank</a>
                <ul>
                         <li style="width:170px">&#8250; <a href="addbloodgroup.php">Add Blood Group</a></li>
						<li style="width:170px">&#8250; <a href="viewbg.php">Blood Groups In Stock </a></li>
						<li style="width:170px">&#8250; <a href="addbdonor.php">Add Blood donor</a></li>
						
						<li style="width:170px">&#8250; <a href="viewdonor.php">Blood Donors List</a></li>
					</ul></li>
                    </ul>
                    
                    <ul>
				<li class="upp"><a href="#">OPD</a>
                <ul>
                         <li style="width:170px">&#8250; <a href="opd_doctors.php">Doctors</a></li>
						<li style="width:170px">&#8250; <a href="viewopdstaff.php">Other Staff</a></li>
						<li style="width:170px">&#8250; <a href="opd_patients.php">Patients</a></li>
                        <li style="width:170px">&#8250; <a href="pathology.php">Pathology</a></li>
					</ul></li>
                    </ul>
                      </ul>
                       
                       
                       </div>
		</div>
	</div>
	
	<div id="content">
		 <div  id="sidebar">
			<div class="box">
            <div class="h_title">&#8250; OPD</div>
				<ul id="home">
					<li class="b1"><a href="opd_doctors.php">Doctors</a></li>
					<li class="b2"><a href="viewopdstaff.php">Other Staff</a></li>
					
					<li class="b2"><a  href="opd_patients.php">Patients</a></li>
                    <li class="b2"><a  href="pathology.php">Pathology</a></li>
				</ul>
			</div>
            <div class="box">
				<div class="h_title">&#8250; Manage Doctors</div>
				<ul id="home">
					<li class="b1"><a href="doctentry.php">Add Doctor</a></li>
					<li class="b2"><a href="view_doctor.php">View all</a></li>
					
					<li class="b2"><a  href="specentry.php">Specialization Category</a></li>
                    <li class="b2"><a  href="viewdoctorspecialization.php">View Specialization</a></li>
				</ul>
			</div>
			<div class="box">
				<div class="h_title">&#8250; Manage Wards</div>
				<ul><li class="b1"><a  href="addroom.php">New Ward Category</a></li>
					<li class="b1"><a  href="addroom.php">Wards entry</a></li>
                    <li class="b2"><a  href="view_wards.php">View All</a></li>
				</ul>
			</div>
			<div class="box">
				<div class="h_title">&#8250; Manage Other Staff</div>
				<ul>
					<li class="b1"><a  href="scategory.php">Add category</a></li>
					<li class="b1"><a  href="viewstaffcategory.php">View Staff category</a></li>
					<li class="b2"><a  href="smember.php">Add staff members</a></li>
					<li class="b1"><a  href="viewstaff.php">View Full Staff</a></li>
				</ul>
			</div>
			<div class="box">
				<div class="h_title">&#8250; Manage Patient</div>
				<ul>
					<li class="b1"><a  href="addpatient.php">Add New</a></li>
					<li class="b2"><a  href="View_patients.php">View Patients</a></li>
				</ul>
			</div>
            <div class="box">
            <div class="h_title">&#8250; Manage Administrator</div>
				<ul>
					<li class="b1"><a  href="adduser.php">Add New User</a></li>
					<li class="b2"><a  href="View_admin.php">View users</a></li>
                    <li class="b2"><a  href="passwordchangeadmin.php">Change Password</a></li>
				</ul>
			</div>
             <div class="box">
            <div class="h_title">&#8250; Ward Availability</div>
				<ul>
					<li class="b1"><a  href="view_wards.php">Check Availability</a></li>
                    </ul>
				
                </div>
<div class="box">
             <div class="h_title">&#8250; Blood Donors</div>
				<ul>
					<li class="b1"><a  href="addbloodgroup.php">Add Blood Group</a></li>
					<li class="b2"><a  href="viewbg.php">Blood Groups In Stock</a></li>
                    <li class="b2"><a  href="addbdonor.php">Add Blood Donor</a></li>
                    <li class="b2"><a  href="viewdonor.php">Blood Donor List</a></li>
				</ul>
			</div>
</div>
</div>