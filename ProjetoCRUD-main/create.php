<?php
if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["idade"] )){

    $nome[] = $_POST['nome'];
    $email[] = $_POST['email'];
    $idade[] = $_POST['idade'];

    echo "Ola".$_POST["nome"].""$_POST["email"].$_POST["idade"];
}

?>