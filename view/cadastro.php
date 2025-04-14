<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="background-cadastro">
    <div>
      <h1>Cadastro</h1>
      <form action="../controller/CadastroController.php" method="POST" id="cadastro">
      <input  name="fullname" type="text" placeholder="Email">
      <br></br>
      <input  name="fullname" type="text" placeholder="Nome Completo">
      <br></br>
      <input  name="fullname" type="text" placeholder="Senha">
      <br></br>
      <input name="fullname" type="text" placeholder="Confirmar Senha">
      <br></br>
      <button>Cadastre-se</button> 
      <br></br>
      <a href="login.php" class="login-link">Já tem uma conta? Faça login</a>   
      </form>
    </div>   
  </body>
</html>