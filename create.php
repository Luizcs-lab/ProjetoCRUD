
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Usuário</title>
     <link rel="stylesheet" href="style.css">
    <!--link do bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>  
    section{
      margin-top: 10%;
      width: 750px;
      height: 350px;
      background: linear-gradient(45deg,rgb(160, 160, 223),rgb(113, 113, 245));
       border-radius: 3%;
       display: flex;
       flex-direction: column;
       align-items: center;
       border-style: ridge;
       border-color: aqua;
       
    }    
      h1{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    
}
div{
  display: flex;
  flex-direction: row;
  gap: 30px;
  align-items: center;
  justify-content: center;
  margin-top: 10%;
}
    </style>
  </head>
  <body>

  <?php
include ("connection.php");
    //pegando as variaveis do formulário
    $NOME = $_POST['nome'];
    $EMAIL = $_POST['email'];
    $idade = $_POST['idade'];
//faz o comando para inserir novos dados na tabela do banco do phpmyadmin
    $sql = "INSERT INTO clientes (nome, email, idade) VALUES ('$NOME','$EMAIL',$idade)";
    if(mysqli_query($conn, $sql)){
        echo"$NOME cadastrado com sucesso";
    }else{
      echo "Falha ao cadastrar";
    }
    
    mysqli_close($conn);
?>
    <a href="index.php"><button type="button" class="btn btn-outline-info">Voltar</button></a>
  </body>
</html>
