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
 define('CORE_MODELS', CORE . 'models/');
 define('CORE_CONTROLLERS', CORE . 'controllers/');
 define('CORE_BIN', CORE . 'bin/');

 //echo CORE_CONTROLLERS;
 /**
 * CONSTATES DE RUTAS DE HTML
 */
 define('HTML',RUTA_BASE . 'html/');
 define('HTML_PUBLIC',HTML . 'public/');
 define('HTML_ERROR',HTML . 'error/');
 define('HTML_OVERALL',HTML . 'overall/');
 /**
  * CONSTATES DE RUTAS DE VIEWS
  */
 define('VIEWS_FILE', RUTA_BASE . 'views/');
 define('VIEWS', APP_URL . 'views/');
 define('VIEWS_APP', VIEWS .'app/');
 define('APP_JS', VIEWS_APP .'js/');
 //echo VIEWS;

 //Inclusion de las archivos para el modelo de datos
 require_once (CORE_BIN . 'functions/encrypt.php');
 require_once (CORE_MODELS . 'accesos.php');
 require_once (CORE_MODELS . 'Conexion.php');
 require_once (CORE_MODELS . 'ORM.php');
 //require_once (CORE_BIN . 'ajax/goLogin.php');

 //echo CORE_MODELS . 'ORM.php';
 //$num = ORM::rows('getAllUsers');
 //ORM::setProcedure('insertUsers',array('dsanzhez','d41d8cd98f00b204e9800998ecf8427e','dzanchez@sistema.com'));
 //echo $num = ORM::rowsSesion('getUserByName',array('dsanchez', 'd41d8cd98f00b204e9800998ecf8427e'));

 //$num = $modelo->rows('getAllUsers');
 //echo 'Número de registros son ' . $num . '</br>';
 //exit;


 //Inclusion de los archivos para el enrutamiento dinámico
 require_once (CORE . 'Ruta.php');
 require_once (CORE_CONTROLLERS . 'rutas.php');



 ?>
