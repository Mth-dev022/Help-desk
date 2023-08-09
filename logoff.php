<?php 

    session_start();

   //unset($_SESSION['Autenticado']);

   session_destroy();
   
   header('Location:Index.php');
?>