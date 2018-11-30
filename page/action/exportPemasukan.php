<?php
require_once __DIR__."/../../config/config.php";
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=data-pemasukan.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");

// Tambahkan table
include 'pemasukanData.php';
?>