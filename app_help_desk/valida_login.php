<?php

session_start();

$usuario_autenticado = false;
$usuario_ID = null;
$usuario_perfil_ID = null;

$perfis = array(1 => 'admin', 2 => 'user');

$usuarios_app = array(
    array('ID' => 1, 'perfil_ID' => 1, 'email' => 'admin@teste.com', 'senha' => '123'),
    array('ID' => 2, 'perfil_ID' => 1, 'email' => 'user@teste.com', 'senha' => '123'),
    array('ID' => 3, 'perfil_ID' => 2, 'email' => 'jose@teste.com', 'senha' => '123'),
    array('ID' => 4, 'perfil_ID' => 2, 'email' => 'maria@teste.com', 'senha' => '123'),
);

foreach($usuarios_app as $user){

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'])
    {
       $usuario_autenticado = true;
       $usuario_ID = $user['ID'];
       $usuario_perfil_ID = $user['perfil_ID'];
    }
    
} 

if($usuario_autenticado){
    echo 'Usuário autenticado';
    $_SESSION['auth'] = 'sim';
    $_SESSION['ID'] = $usuario_ID;
    $_SESSION['perfil_ID'] = $usuario_perfil_ID;
    header('Location: home.php?login=sucess');
}
else {
    $_SESSION['auth'] = 'não';
    header('Location: index.php?login=erro');
}
?>