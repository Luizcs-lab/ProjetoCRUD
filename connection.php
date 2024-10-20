<?php
//variaveis contendo as caracteristicas do banco
    $localhost = "localhost";
    $user = "root";
    $password = "";
    $db = "cadastro_crud";

    //instanciar uma conexão com o banco de dados do phpmyadmin, logo você passará os parametros para ele ter acesso ao banco.
 if( $conn = mysqli_connect($localhost,$user,$password,$db) ){
    echo "Conectado";
 }else{
    echo"error!";
 }
?>