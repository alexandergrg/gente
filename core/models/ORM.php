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

    /**
     * Procedimiento almacenado Consultar el inicio de sesión
     * @procedure Recibe el procedimiento almacenado
     * @values es una array que recibe los parametros para consutar
     * como nombre se usuario o correo electrónico, y pass
     */
     public static function sesionProcedure($procedure, $values = null){
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
         //echo $values[$i] . '</br>';
       }
       $statement->execute();
       while ($result = $statement->fetch()) {
         $rows[] = $result;
       }
       self::desConectar();
       return $rows;
     }
     /**
      * Final del setProcedure
      */



  public static function rowsSesion($procedure, $values = null){
    $arrayRegistros = self::sesionProcedure($procedure, $values);
    return $arrayRegistros;


  }
  public static function rows($procedure, $key = null, $parametro = null){
    $arrayRegistros = self::getProcedure($procedure);
    return count($arrayRegistros);
  }

  public static function rowsAll($procedure) {
    $arrayRegistros = self::getProcedure($procedure);
    return count($arrayRegistros);
  }

}
?>
