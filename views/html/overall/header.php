<?php
ini_set('session.cookie_lifetime',"3600");
ini_set('session.gc_maxlifetime',"3600");
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

    <base href="<?= APP_URL ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= APP_TITLE ?> | Inicio </title>

    <!-- Bootstrap -->
    <link href="<?=VIEWS ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=VIEWS ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="<?=VIEWS ?>vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

    <script src="<?= APP_JS ?>generales.js">  </script>

    <!-- Custom Theme Style -->
    <link href="<?=VIEWS ?>build/css/custom.min.css" rel="stylesheet">
    <!-- DataTables -->
    <script src="<?=VIEWS ?>vendors/jquery/dist/jquery.js">  </script>
    <script src="<?=VIEWS ?>vendors/tablas/js/jquery.dataTables.min.js">  </script>
    <script src="<?=VIEWS ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js">  </script>
    <link href="<?=VIEWS ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <script>
    $(document).ready(function(){
      $('#datatable').DataTable({
        language: {
          "sProcessing":     "Procesando...",
          "sLengthMenu":     "Mostrar _MENU_ registros",
          "sZeroRecords":    "No se encontraron resultados",
          "sEmptyTable":     "Ningún dato disponible en esta tabla",
          "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
          "sInfoPostFix":    "",
          "sSearch":         "Buscar:",
          "sUrl":            "",
          "sInfoThousands":  ",",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     "Siguiente",
              "sPrevious": "Anterior"
          },
          "oAria": {
              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
          }
        }
      });
    });
    </script>

  </head>
