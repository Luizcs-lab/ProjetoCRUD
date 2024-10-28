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
    crossorigin="anonymous" />
  <style>
    section {
      margin-top: 5%;
      width: 850px;
      height: 550px;
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
      color: rgb(51, 70, 90);

    }

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

    <h1>Sistema de CRUD - Cadastro de clientes</h1>
    <p>Seja bem-vindo(a): por favor selecione uma das opções. </p>
    <!--area de botões para ação de excluir, listar e atualizar-->
    <div>
      <a href="formulario.html"><button type="button" class="btn btn-primary">Cadastrar</button></a>
      <a href="listar.php"><button type="button" class="btn btn-primary">Listar</button></a>
      <a href="atualizar.php"><button type="button" class="btn btn-primary">Atualizar</button></a>
      <a href="delete.html"><button type="button" class="btn btn-primary">Excluir</button></a>
    </div>

  </section>

</body>

</html>