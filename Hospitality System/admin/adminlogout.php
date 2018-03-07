<?php
//include "../header.php";
require_once 'config.php';
session_start();
session_destroy();
//session_unset();
$admin_url = 'http://localhost/Hospital%20new1/index.php';
header('location:'.$admin_url);
?>