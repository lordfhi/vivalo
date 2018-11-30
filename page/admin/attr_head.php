<?php
require_once __DIR__."/../../config/config.php";

if (!cekLoginAuth())
{
   redirectPage("page/page-register.php");
}
?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>

  <link rel="stylesheet" href="../../asset/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../asset/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../asset/vendors/css/vendor.bundle.addons.css">


  <link rel="stylesheet" href="../../asset/css/admincss.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../asset/images/favicon.png" />


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>