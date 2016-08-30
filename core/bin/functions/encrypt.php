<?php

function Encrypt ($string){
  $long = strlen($string);
  for ($i=0; $i < $long; $i++) {
    $str .= ($x % 2) != 0 ? md5($string[$x]) : $x;

  }
  return md5($str);
}


?>
