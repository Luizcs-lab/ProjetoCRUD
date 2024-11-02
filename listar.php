<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--link do bootstrap-->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">

  <title>Listagem de Usuário</title>
</head>

<body>

  <?php
  //pegando dados da tabela
  include("connection.php");

  $sql = "SELECT * FROM clientes ORDER BY id DESC";
  //executa a query de comando
  $resultado = $conn->query($sql);




  ?>

  <section>
    <table class="table table-dark table-bordered table-hover">
      <h1 class="text-decoration-underline">Listagem de Usuário</h1>
      <thead>
        <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
          <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
        </svg>
        <tr>
          <!--cabeçalho da tabela-->
          <th scope="col">ID</th>
          <th scope="col">NOME</th>
          <th scope="col">EMAIL</th>
          <th scope="col">IDADE</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($lista = mysqli_fetch_assoc($resultado)) {
          echo "<tr>";
          echo "<td>" . $lista['id'] . "</td>";
          echo "<td>" . $lista['nome'] . "</td>";
          echo "<td>" . $lista['email'] . "</td>";
          echo "<td>" . $lista['idade'] . "</td>";

          echo "<td>
    <a class='btn btn-primary' href='atualizar.php?id=$lista[id]'>
    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
  </svg>
  </a>
   </td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>

    <a href="index.php"><button type="button" class="btn btn-outline-info">Voltar</button></a>
  </section>



</body>

</html>