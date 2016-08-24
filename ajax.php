<?php

if (isset($_GET['view']) and file_exists('core/controllers/' . $_GET['view'] . Controller.php )) {
  include('core/controllers/' . $_GET['view'] . Controller.php );
}else {
  echo 'por defecto'
}

?>
