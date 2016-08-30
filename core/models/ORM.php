<?php
/**
 *ORM- Realizado con procedimientos almacenados fijos.
 */
class ORM extends \Conexion
{
  #Propiedad privada que contiene la conexion
  protected static $cnx;
   function  __construct(){
     self::conectar();
   }
   public static function Conectar(){
     self::$cnx = \Conexion::getConexion();
   }
   public static function desConectar(){
     self::$cnx = null;
   }

  /**
   * Procedimiento almacenado para insertar datos
   */
   public static function setProcedure($procedure, $values = null){
     $query = 'CALL ' . $procedure ;
     self::Conectar();
     $param = '';
     if (!is_null($values)) {
       for ($i=0; $i < count($values); $i++) {
         $param .= ':' . $i . ',';
       }
      $param = trim($param,',');
      $param = '(' . $param . ')';
      $query .= $param;
    }else{
      $query .= '()';
    }
    //echo $query;
    $statement = self::$cnx->prepare($query);
    for ($i=0; $i <count($values) ; $i++) {
      $statement->bindParam(':' . $i, $values[$i]);
      //echo $values[$i];
    }
    $statement->execute();
    self::desConectar();
   }
   /**
    * Final del setProcedure
    */


    /**
     * Procedimiento Almacenado para obtener datos
     */
   public static function getProcedure($procedure, $key = null, $parametro = null){
     $query = 'CALL ' . $procedure . '()';
     self::Conectar();
     //echo $query;
     $statement = self::$cnx->prepare($query);
     $statement->execute();
     while ($result = $statement->fetch()) {
       $rows[] = $result;
     }
     self::desConectar();
     return $rows;
   }
   /**
    * Final del getProcedure
    */

}
?>
