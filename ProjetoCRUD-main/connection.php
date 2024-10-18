<?php

    //pegando as variaveis do formulário
    $NOME = $_POST['nome'];
    $EMAIL = $_POST['email'];
    $idade = $_POST['idade'];

    $localhost = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'clientes';

    //instanciar uma conexão com o banco de dados do phpmyadmin, logo você passará os parametros para ele ter acesso ao banco.
    $conn= new mysqli($localhost,$user,$password,$db); 
    //verificaçaõ se o acesso deu certo
if($conn->connect_error){
    die("Falha ao conectar ao banco");
}

$smtp = $conn->prepare("INSERT INTO CLIENTES (nome,email,idade) VALUES (?,?,?)");


if($smtp ->execute()){
    echo"enviado com successo!";
}else{
    echo"erro no envio dos dados ".$smtp->error;
}
$conn->CLOSE();
$smtp->CLOSE();
?>