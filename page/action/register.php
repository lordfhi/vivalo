<?php
require_once __DIR__."/../../config/config.php";

$nama = $_POST["nama"];
$user = $_POST["username"];
$pass = $_POST["password"];

$db->db_query("INSERT INTO `vivalo_user` (`nama`, `username`, `password`, `level`) VALUES ('".$nama."', '".$user."', '".md5($pass)."', 3)");

$_SESSION['username'] = $user;
$_SESSION['status'] = "login";

header("location: ../page-customer.php");