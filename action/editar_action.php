<?php
require 'config.php';
$id = filter_input(INPUT_POST,'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);

if($nome && $email){
    $sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
    $sql->bindValue(':id',$id);
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    $sql->execute();

    header('Location: ../pages/forms/validation.php');
    exit();
}else{
    header('Location: ../pages/forms/validation.php');
    exit();
}