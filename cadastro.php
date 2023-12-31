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
  $endereco = $_POST['inputEndereco'];
  $cidade = $_POST['inputCidade'];
  $estado = $_POST['inputEstado'];
  $cep = $_POST['inputCEP'];

  $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,sobrenome,email,endereco,cidade,estado,cep)VALUES('$nome','$sobrenome','$email','$endereco','$cidade','$estado','$cep' ");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>📱 Cadastro de novos clientes</title>
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


    <main>
      <section class="container my-4">
        <form>
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
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="inputEndereco">Endereço</label>
            <input type="text" class="form-control" id="inputEndereco" placeholder="Rua Principal, 1234">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCidade">Cidade</label>
              <input type="text" class="form-control" id="inputCidade">
            </div>
            <div class="form-group col-md-4">
              <label for="inputEstado">Estado</label>
              <select id="inputEstado" class="form-control">
                <option selected>Escolher...</option>
                <option value="MG">MG</option>
                <option value="RJ">RJ</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputCEP">CEP</label>
              <input type="text" class="form-control" id="inputCEP">
            </div>
          </div>
          <button type="submit" id="botao-cadastrar" class="btn-primary">Cadastrar</button>
        </form>
      </section>

    </main>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Página criada por:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            Beatriz Romão Neves<br>
            Lucas Beni<br>
            Pedro Carvalho<br>
            Vinicius Viana Brito<br>
            Vitor Vouvouloudas de Moraes<br>
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