<?php
include_once "conexao.php";

try{

    $nome = filter_var($_POST['nome']);
    $login = filter_var($_POST['login']);

    $insert = $conectar->prepare("INSERT INTO login (nome, login) VALUES (:nome, :login)");
    $insert->bindParam(':nome', $nome);
    $insert->bindParam(':login', $login);
    $insert->execute();

    header("location: index.php");


} catch(PDOException $e){

    echo 'Erro: ' . $e->getMessage();

}

?>