<?php
require_once __DIR__."/../../config/config.php";
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=data-pengeluaran.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
 
// Tambahkan table
include 'pengeluaranData.php';
?>