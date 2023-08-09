<?php

   session_start();

   $autenticacao = false;

   $user_id = null;

   $usuario_perfil_id = null;

   $perfis = [1 => 'Administrativo', 2 => 'Usuario'];

   $usuarios = [
    
   ['id' => 1 , 'email' => 'matheuszebende@outlook.com', 'Senha' => 'matheus1', 'perfil_Id' => 1],
   ['id' => 2 , 'email' => 'Matheuszebende6@gmail.com', 'Senha' => 'matheus1',  'perfil_Id' => 1],
   ['id' => 3 , 'email' => 'matheuszebende2014@hotmail.com', 'Senha' => 'matheus1',  'perfil_Id' => 2],
   ['id' => 4 , 'email' => 'eu@outlook.com', 'Senha' => 'matheus1',  'perfil_Id' => 2],
   
   ];


   foreach($usuarios as $i) {
            
        if($i['email'] == $_POST['email'] and $i['Senha'] == $_POST['senha']) {

            $autenticacao = true;

            $user_id = $i['id'];

            $usuario_perfil_id = $i['perfil_Id'];
        }
   }

   if($autenticacao) {
       
        $_SESSION['Autenticado'] = 'SIM';
        $_SESSION['id'] = $user_id;
        $_SESSION['perfil_Id'] = $usuario_perfil_id;
       header('Location:home.php');

   }

   else {

        $_SESSION['Autenticado'] = 'NAO';
        header('location:index.php?login=erro');
        
   }


?>