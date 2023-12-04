<?php

if (isset($_POST['submit']))
{
  //print_r($_POST['inputNome']);
  //print_r($_POST['inputSobrenome']);
  //print_r($_POST['inputEmail'])

  include_once('conexaobd.php');

  $nome = $_POST['inputNome'];
  $sobrenome = $_POST['inputSobrenome'];
  $email = $_POST['inputEmail'];
  $mensagem = $_POST['suaMensagem'];

  $result = mysqli_query($conexao, "INSERT INTO contatos(nome,sobrenome,email,mensagem)VALUES('$nome','$sobrenome','$email','$mensagem'");
}

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📱 Contatos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
  <header class="cabecalho">
    <a href="index.html">
      <img class="cabecalho-imagem" src='fotos/logo_teste_4.png' alt="Logo da empresa"></img></a>
          <h1 id="nome-empresa"><strong>PONTO QUENTE</strong></h1>

        <!--Colocar barra de pesquisa-->

      <section class="barra-menu">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="modelos.html">Modelos</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="contatos.php">Contato</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="cadastro.php">Cadastro</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="carrinho.html">Carrinho</a>
              </li>
              <li class="nav-item active">
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">Sobre nós</button>
              </li>
              <!-- Adicionar mais itens de menu conforme necessário -->
            </ul>
          </div>
        </nav>
      </section>
    
  </header>

    <main class="contato">
      <section class="container my-4">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNome">Nome</label>
              <input type="text" class="form-control" id="inputNome" placeholder="Nome">
            </div>
            <div class="form-group col-md-6">
              <label for="inputSobrenome">Sobrenome</label>
              <input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email"><br>
          </div>
          <div class="mensagem_contato">
            <label>Sua Mensagem:</label>
            <textarea name="suaMensagem" id="suaMensagem" cols="50" rows="5"></textarea>
            <form action="mailto:e_commercefmu@gmail.com" method="post" enctype="text/plain"></form>
            <input nome="submit"  id="enviar" type="submit">
            <!--card-->
            <div class="card"  style="width: 20rem;">
              <div class="card-body"> 
                <h5 class="card-title" id="card1">Entre em contato</h5>
                <p class="card-text">Email: pontoquentefmu@gmail.com</p>
                <p class="card-text">Tel: (11) 9xxxx-xxxx</p>
              </div>
            </div>
          </div>
            
      </section>

      
      <!--Quero por o card do lado direito-->
      
    
    </main>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Página web criada por:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            Beatriz<br>Lucas<br>Pedro<br>Vinicius<br>Vitor Vouvouloudas de Moraes<br>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            
            </div>
        </div>
        </div>
      </div>


    <footer class="rodape">
        <p>© 2023 Ponto Quente LTDA</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>