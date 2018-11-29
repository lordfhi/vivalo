<?php 
require_once __DIR__."/../../config/config.php";

session_destroy();
session_unset($_SESSION['user']);

// mengalihkan halaman sambil mengirim pesan logout
header("location:../page-register.php?pesan=logout");
?>