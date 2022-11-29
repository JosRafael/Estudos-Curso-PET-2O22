<?php
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="estilos.css">

  <title>Olá, mundo!</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Início <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notícias</a>
        </li>

      </ul>
    </div>
  </nav>

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/banner.png" alt="Primeiro Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/qatar.jpg" alt="Segundo Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/taca.jpg" alt="Terceiro Slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>


  <section id="noticias">

    <div class="row">
      <div class="col-12 col-lg-4">

        <div class="card" style="width: 18rem;">
          <div class="img-card">
            <img class="card-img-top" src="assets/copa.webp" alt="Imagem de capa do card">
          </div>
          <div class="card-body">
            <h5 class="card-title">Título do card</h5>
            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
            <a href="#" class="btn btn-primary">Visitar</a>
          </div>
        </div>

      </div>
      <div class="col-12 col-lg-4">

        <div class="card" style="width: 18rem;">
          <div class="img-card">
            <img class="card-img-top" src="assets/neymar.png" alt="Imagem de capa do card">
          </div>
          <div class="card-body">
            <h5 class="card-title">Título do card</h5>
            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
            <a href="#" class="btn btn-primary">Visitar</a>
          </div>
        </div>

      </div>
      <div class="col-12 col-lg-4">

        <div class="card" style="width: 18rem;">
          <div class="img-card">
            <img class="card-img-top" src="assets/copa.webp" alt="Imagem de capa do card">
          </div>
          <div class="card-body">
            <h5 class="card-title">Título do card</h5>
            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
            <a href="#" class="btn btn-primary">Visitar</a>
          </div>
        </div>

      </div>
    </div>

  </section>


  <section id="formulario">
    <form class="col-6" action="processa.php" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Senha</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="senha">
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="entrar">Cadastrar</button>
    </form>
  </section>


  <section id="usuarios">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">EMAIL</th>
          <th scope="col">SENHA</th>
          <th scope="col">DATA</th>
          <th scope="col">AÇÕES</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM usuario";
        $res = $mysqli->query($sql);

        while ($dados = $res->fetch_assoc()) {
        ?>
          <tr>
            <th scope="row"> <?php echo $dados["id"]; ?> </th>
            <td> <?php echo $dados["email"]; ?> </td>
            <td> <?php echo $dados["senha"]; ?> </td>
            <td> <?php echo $dados["created_at"]; ?> </td>
            <td>
              <div class='btn-group'>
                <a class='btn btn-success' href='edit.php?id=<?= $dados["id"]?>'>Editar</a>
                <a class='btn btn-danger' href='delet.php?id=<?= $dados["id"]?>'>Deletar</a>
              </div>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </section>



  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>