<?php 

session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
header("location:../page-register.php?pesan=logout");
?>