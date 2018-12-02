<?php
session_start();

/**  */
define("APP_URL", "http://localhost/vivalo/");

/** Require fungsi mysql */
require_once __DIR__."/functions/mysqli.php";

/**  */
$db = new Database("localhost", "root", "", "vivalo");

/**
 * Fungsi cek auth
 */
function cekLoginAuth()
{
	return (isset($_SESSION["user"]) ? true : false);
}

function cekLoginUrl()
{
	return (isset($_SESSION["user_level"]) ? ($_SESSION["user_level"] == "1" || $_SESSION["user_level"] == 2 ? "page/admin/index.php" : "page/page-customer.php") : null);
}

function getLoginAuth()
{
	return (isset($_SESSION["user"]) ? (object) $_SESSION["user"] : null);
}

function redirectPage($to)
{
	header("location: ".APP_URL. str_replace("//", "//", "/".$to));
}