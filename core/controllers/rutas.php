<?php

//echo 'estoy en la ruta.php';
$rutas = new Ruta(array(
  '/' =>'loginController',
  '/admin' =>'homeController',
  '/users' =>'usuarioController',
));
?>
