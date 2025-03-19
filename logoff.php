<?php

session_start();

// remove indices especificos do array de sessão

unset($_SESSION['y']);


// destroi toda a sessão
session_destroy();
header('Location: index.php');

?>