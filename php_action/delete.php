<?php
# Sessão
session_start();
# Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])){
   
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM cliente WHERE id = '$id'";

    if(mysqli_query($connect, $sql)){
        $_SESSION["mensagem"] = "Cliente removido.";
        header('location: ../index.php');
    }else{
        $_SESSION["mensagem"] = "Erro ao deletar!";
        header('location: ../index.php');
    }

}


?>