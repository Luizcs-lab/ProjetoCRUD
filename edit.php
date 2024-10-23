<?php// Arquivo de conexão com o banco de dados

include ("connection.php");


if(isset($id=$_POST['update'])){

    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $idade=$_POST['idade'];

    $sql="UPDATE clientes SET nome=$nome, email=$email, idade=$idade WHERE id=$id";
    $result=$conn-> query($sql);
   

}

<a href="index.php" class="btn btn-secondary">Voltar</a>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!--link do bootstrap-->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
    
</body>
</html>

