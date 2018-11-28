<?php
session_start();

/** Require fungsi mysql */
require_once __DIR__."/functions/mysqli.php";

/**  */
$db = new Database("localhost", "root", "", "vivalo");