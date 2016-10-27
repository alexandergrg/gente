<?php


/**
 * Clase conexion Metodo PDO,
 */
 class Conexion
 {



   public static function getConexion(){
     try {
       // $conexion = new PDO('mysql:host='. HOST . ';dbname=' .DB ,USER ,PASS);
      $conexion = new PDO('pgsql:host='. pgHOST . ';port=' . pgPORT . ';dbname=' .pgDB ,pgUSER ,pgPASS);
       //$conexion = new PDO('pgsql:host= localhost;port=5432 ;dbname= sigcombdb' ,'is_sigcombdb' ,'admin123456');
       //$pdo = new PDO('pgsql:host=192.168.137.160;port=5432;dbname=platin', 'cappytoi', '1111');
       return $conexion;
     } catch (Exception $e) {
       die($e->getMessage());
     }

   }
 }

 //LLamada a la clase para verificar la conexion;
  //Conexion::getConexion();

?>
