<?php
session_start();

$arquivo = fopen('../../../xampp/app_help_desk/arquivo.hd', 'w+');

fclose($arquivo);

header('Location: home.php');

?>