

<?php
include("connection.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
   
$sql = "SELECT * FROM clientes WHERE id ='$id' ";
$resultado = mysqli_query($conn, $sql);

$linha = mysqli_fetch_assoc($resultado);

?>
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
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
    <title>Atualização de usuários</title>
</head>
<body>
    
    <form action="saveedit.php" method="POST">
    <h1> Atualização</h1>
    <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
</svg>
      <input type="hidden" name="id" value="<?php echo $linha['id']?>">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" placeholder="Digite o novo nome de usuario:" value="<?php echo $linha['nome']; ?>" required>
      <br>
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" placeholder="Digite o novo e-mail:" value="<?php echo $linha['email']; ?>"required>
      <br>
      <label for="idade">Idade:</label>
      <input type="number" id="idade" name="idade" placeholder="Digite idade:"value="<?php echo $linha['idade'];?>" required>
      <br>
      <div>
      <button type="submit" value="update" name="update" class="btn btn-outline-info">atualizar</button>
      <a href="index.php"><button type="button" class="btn btn-outline-info">Voltar</button></a>
      </div>
     
      
  </form>
  
    
</body>
</html>
