<?php

//echo 'estoy en la ruta.php';
$rutas = new Ruta(array(
  '/' =>'loginController',
  '/admin' =>'indexController',
  '/users' =>'usuarioController',
));
?>
