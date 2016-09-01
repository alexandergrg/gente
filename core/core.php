<?php

 /**
 * CONSTANTES DE DISEÑO
 */
 define('APP_URL','http://localhost/sistema/');
 define('APP_TITLE','SIGCOMB');
 define('APP_COPY','&copy; ' . date('Y',time()) .' Derechos Reservados. GADPP - <a href="#"> Desarrollador. Alexander González G. </a>');
 /**
  * CONSTATES DE RUTAS DE CORE
  */
 define('CORE', RUTA_BASE . 'core/');
 define('CORE_CONTROLLERS', CORE . 'controllers/');

 //echo CORE_CONTROLLERS;
 /**
 * CONSTATES DE RUTAS DE HTML
 */
 define('HTML',RUTA_BASE . 'html/');
 define('HTML_PUBLIC',HTML . 'public/');
 define('HTML_ERROR',HTML . 'error/');
 /**
  * CONSTATES DE RUTAS DE VIEWS
  */
  define('VIEWS_FILE', RUTA_BASE . 'views/');
  define('VIEWS', APP_URL . 'views/');
  define('VIEWS_APP', VIEWS .'app/');
  define('APP_JS', VIEWS_APP .'js/');
  //echo VIEWS;

 //Inclusion de los archivos para el enrutamiento dinámico
 include_once (CORE . 'Ruta.php');
 include_once (CORE_CONTROLLERS . 'rutas.php');

//  require_once( CORE_BIN . 'functions/encrypt.php');



 ?>
