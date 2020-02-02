<?php
# Sessão
session_start();
# Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])){
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE cliente SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', telefone = '$telefone' 
            WHERE id = '$id'";

    if(mysqli_query($connect, $sql)){
        $_SESSION["mensagem"] = "Dados atualizados.";
        header('location: ../index.php');
    }else{
        $_SESSION["mensagem"] = "Erro ao atualizar!";
        header('location: ../index.php');
    }

}


?>