<?php
# Conexão

require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])){
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);

    $sql = "INSERT INTO cliente (nome, sobrenome, email, telefone) 
            VALUES ('$nome', '$sobrenome', '$email', '$telefone')";

    if(mysqli_query($connect, $sql)){
        header('location: ../index.php?sucesso');
    }else{
        header('location: ../index.php?erro');
    }

}


?>