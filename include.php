<?php 
  
  session_start();

  if(!isset($_SESSION['Autenticado']) || $_SESSION['Autenticado'] !='SIM') {

    header('location:index.php?login=erro2');
}

?>