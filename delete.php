<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Deletar Usuário</title>
    <link rel="stylesheet" href="style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      section {
          margin-top: 10%;
          width: 750px;
          height: 350px;
          background: linear-gradient(45deg, rgb(160, 160, 223), rgb(113, 113, 245));
          border-radius: 3%;
          display: flex;
          flex-direction: column;
          align-items: center;
          border-style: ridge;
          border-color: aqua;
      }    
      h1 {
          font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      }
      div {
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
include("connection.php"); // Certifique-se de que este arquivo está correto

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando o id do formulário
    $id = $_POST['id'];

    // Validação básica para verificar se o ID é um número
    if (filter_var($id, FILTER_VALIDATE_INT) === false) {
        die("ID inválido."); // Se não for um número, mostra mensagem de erro
    }

    // Prepara o comando para deletar dados na tabela do banco
    $sql = "DELETE FROM clientes WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    
    // Liga o parâmetro
    mysqli_stmt_bind_param($stmt, 'i', $id);

    // Executa o comando
    if (mysqli_stmt_execute($stmt)) {
        echo "Usuário deletado com sucesso.";
    } else {
        echo "Falha ao deletar usuário: " . mysqli_error($conn);
    }

    // Fecha a declaração e a conexão
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    echo "Método de requisição inválido.";
}
?>
<a href="index.php"><button type="button" class="btn btn-primary">Voltar</button></a>
