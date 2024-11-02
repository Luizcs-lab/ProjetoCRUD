<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro de Usuário</title>
  
  <!--link do bootstrap-->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
  <style>    

    div {
      display: flex;
      flex-direction: column;
      gap: 30px;
      align-items: center;
      justify-content: center;
      margin-top: 5%;
    }
    button{
      width: 200px;
      height: 70px;
    }
  </style>
</head>

<body>

  <section>

    <h1 class="text-decoration-underline">Sistema de CRUD</h1>
    <p>Seja bem-vindo(a): por favor selecione uma das opções. </p>
    <!--area de botões para ação de excluir, listar e atualizar-->
    <div>
      <a href="formulario.html"><button type="button" class="btn btn-primary">Cadastrar</button></a>
      <a href="listar.php"><button type="button" class="btn btn-primary">Listar</button></a>
      
      <a href="delete.html"><button type="button" class="btn btn-primary">Excluir</button></a>
    </div>

  </section>

</body>

</html>