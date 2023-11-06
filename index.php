<!DOCTYPE html>
<html lang='pt-br'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<title>GuiaMinas+</title>
</head>

<body class="bd-index">
  <!--Cabeçalho -->
  <div class='bg-black text-light text-center'>
    <?php
    echo "<p>Bem-vindo(a) ao GuiaMinas+</p>";
    ?>
  </div>
  <?php
  include('topo.php')
    ?>
  <!-- Formulário de Anúncio -->
  <div class="container-formulario">
    <div class="formulario">
      <h1 class="text-center">Anuncie Conosco</h1>
      <form action="enviar.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="4" cols="50" required></textarea><br><br>

        <button class="btn btn-primary" type="submit" id="botao-env">Enviar</button>
        <button class="btn btn-primary" type="button" value="Limpar" id="limpar">Limpar</button>
      </form>
    </div>
  </div>
  <!-- Rodapé -->
  <footer class="bg-body-tertiary text-center text-lg-start">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">GuiaMinas+</h5>
          <p>
            GuiaMinas+ é um site que tem como objetivo divulgar eventos e pontos turísticos de Minas Gerais.
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contato</h5>
          <ul class="list-unstyled mb-0" id="links">
            <li>
              <a href="#!" class="text-dark">Instagram</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Facebook</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Email</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Whatsapp</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Links Úteis</h5>
          <ul class="list-unstyled" id="links">
            <li>
              <a href="https://pt.wikipedia.org/wiki/Minas_Gerais" class="text-dark">Minas Gerais</a>
            </li>
            <li>
              <a href="https://pt.wikipedia.org/wiki/Belo_Horizonte" class="text-dark">Belo Horizonte</a>
            </li>
            <li>
              <a href="https://pt.wikipedia.org/wiki/Uberl%C3%A2ndia" class="text-dark">Uberlândia</a>
            </li>
            <li>
              <a href="https://pt.wikipedia.org/wiki/Montes_Claros" class="text-dark">Montes Claros</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php
    include('footer.php')
      ?>
    <script>
      document.getElementById('limpar').addEventListener('click', function () {
        // Limpa os campos do formulário
        document.getElementById('nome').value = '';
        document.getElementById('email').value = '';
        document.getElementById('mensagem').value = '';
      });
    </script>
    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
      </script>
</body>

</html>