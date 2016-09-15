<?php

//echo 'estoy en la ruta.php';
$rutas = new Ruta(array(
  '/' =>'loginController',
  '/inicio' =>'indexController',
  '/v-livianos' =>'vehiculoLivianosController',
  '/usuarios' =>'usuariosController',
));
?>
