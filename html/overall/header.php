<?php
ini_set('session.cookie_lifetime',"300");
ini_set('session.gc_maxlifetime',"300");
session_start();
if (!isset($_SESSION['app_session'])) {
  header('location: /sistema');
}

 ?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <base href="<?= APP_URL ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= APP_TITLE ?> | Home </title>

    <!-- Bootstrap -->
    <link href="<?=VIEWS ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=VIEWS ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="<?=VIEWS ?>vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

    <script src="<?= APP_JS ?>generales.js">

    </script>

    <!-- Custom Theme Style -->
    <link href="<?=VIEWS ?>build/css/custom.min.css" rel="stylesheet">
  </head>
