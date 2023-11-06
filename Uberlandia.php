<!DOCTYPE html>
<html lang='pt-br'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="style.css">
  <title>GuiaMinas+</title>
</head>

<body>
  <button onclick="scrollToTop()" id="scrollButton" title="Voltar ao topo"></button>
  <!--menu -->
  <?php
  include('menu.php')
    ?>
  <!--Uberlândia-->
  <div class="p-5 " id="bg-ub">
  </div>
  <div class="bg-black bg-opacity-25 p-3">
    <h1 class="text-center" id="bn-mc">Uberlândia</h1>
  </div>
  <div>
    <p class="m-5 p-lg-5">Uberlândia é uma cidade localizada no estado de Minas
      Gerais, no Brasil. Com uma população de aproximadamente 700 mil habitantes,
      é considerada um importante centro urbano e econômico da região do Triângulo
      Mineiro.<br><br>

      A cidade de Uberlândia possui uma história rica, com suas origens remontando
      ao final do século XIX, quando era uma pequena vila. Ao longo dos anos,
      experimentou um rápido crescimento populacional e desenvolvimento econômico,
      impulsionado principalmente pela agropecuária e pelo comércio.<br><br>

      Atualmente, Uberlândia é um importante polo industrial e de serviços. A
      cidade abriga um grande número de indústrias em diversos setores, como
      alimentício, metalúrgico, têxtil, automobilístico e tecnológico. Além disso,
      possui uma forte presença no setor de comércio e serviços, com um amplo
      comércio varejista e uma variedade de estabelecimentos comerciais.<br><br>

      No aspecto cultural, Uberlândia oferece uma variedade de opções para seus
      habitantes e visitantes. A cidade possui uma infraestrutura cultural bem
      desenvolvida, com teatros, cinemas, museus e centros culturais. Além disso,
      realiza anualmente diversos eventos, como festivais de música, exposições
      artísticas e feiras agropecuárias, que atraem um grande público.<br><br>

      No campo educacional, Uberlândia possui uma das maiores universidades do
      país, a Universidade Federal de Uberlândia (UFU), além de outras
      instituições de ensino superior públicas e privadas. Isso contribui para a
      formação de uma população qualificada e para o desenvolvimento de pesquisas
      científicas na região.<br><br>

      Em termos de infraestrutura, Uberlândia possui um sistema de transporte
      público composto por ônibus e táxis, além de um aeroporto regional que
      oferece voos para diversas cidades do Brasil. A cidade também possui uma boa
      estrutura de saúde, com hospitais e clínicas que atendem tanto a população
      local quanto pacientes de outras regiões.<br><br>

      Por fim, Uberlândia é conhecida pela qualidade de vida oferecida aos seus
      habitantes. A cidade possui um clima tropical, com temperaturas elevadas
      durante a maior parte do ano. Além disso, conta com áreas verdes, praças,
      parques e opções de lazer, proporcionando um ambiente agradável para se
      viver.<br><br>

      Em resumo, Uberlândia é uma cidade em constante desenvolvimento, com uma
      economia diversificada, uma vida cultural movimentada e uma boa
      infraestrutura. Com sua localização estratégica e potencial de crescimento,
      ela desempenha um papel importante na região em que está inserida.</p>
  </div>
  <!--Hospedagem -->
  <div class="title-hospedagem" id="hospedagem">
    <h2 class="bg-dark bg-opacity-25 p-3" id="font-mc">Hospedagem</h2>
  </div>
  <div class="row row-cols-3 row-cols-md-3 m-5">
    <div class="card" style="width: 18rem;">
      <img src="https://media-cdn.tripadvisor.com/media/photo-s/07/8c/0c/73/mercure-uberlandia-plaza.jpg"
        class="card-img-top img-fluid h-75" alt="mercure-hotel" width="100%" height="100%">
      <div class="card-body">
        <h5 class="card-title text-center">Mercure Uberlândia Plaza Shopping
        </h5>
        <p class="card-text text-center">
          Rua da Bandeira 400, Uberlândia, Minas Gerais 38405-174 Brasil
        <p>
          <a href="https://www.tripadvisor.com.br/Hotel_Review-g681229-d12432299-Reviews-Dubai_Suites-Montes_Claros_State_of_Minas_Gerais.html"
            target="_blank" class="btn btn-primary d-grid">Reserve agora</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/24/ff/7f/28/exterior-view.jpg?w=300&h=-1&s=1"
        class="card-img-top img-fluid h-75" alt="..." width="100%" height="100%">
      <div class="card-body">
        <h5 class="card-title text-center">Ibis Uberlandia</h5>
        <p class="card-text text-center">Avenida Joao Naves de Avila 1590 A Bairro Santa Maria, Uberlândia, Minas Gerais
          38408-100 Brasil</p>
        <a href="https://www.tripadvisor.com.br/Hotel_Review-g303400-d1546377-Reviews-Ibis_Uberlandia-Uberlandia_State_of_Minas_Gerais.html"
          target="_blank" class="btn btn-primary d-grid">Reserve agora</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0a/8a/91/db/executive-inn.jpg?w=300&h=300&s=1"
        class="card-img-top img-fluid" alt="">
      <div class="card-body">
        <h5 class="card-title text-center">Executive Inn</h5>
        <p class="card-text text-center">
          Av. Governador Rondon Pacheco - Pista Lateral, 5000 Bairro Tibery, Uberlândia, Minas Gerais 38405-142 Brasil
        </p>
        <a href="
            https://www.tripadvisor.com.br/Hotel_Review-g303400-d1019093-Reviews-Executive_Inn-Uberlandia_State_of_Minas_Gerais.html"
          target="_blank" class="btn btn-primary d-grid">Reserve agora</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img
        src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/b6/a2/24/b-b-hotels-uberlandia.jpg?w=300&h=300&s=1"
        class="card-img-top img-fluid" alt="">
      <div class="card-body">
        <h5 class="card-title text-center">B&B Hotels Uberlândia</h5>
        <p class="card-text text-center">
          Praça Tubal Vilela, 192 Centro, Uberlândia, Minas Gerais 38400-186 Brasil</p>
        <a href="https://www.tripadvisor.com.br/Hotel_Review-g303400-d1879051-Reviews-B_B_Hotels_Uberlandia-Uberlandia_State_of_Minas_Gerais.html"
          target="_blank" class="btn btn-primary d-grid">Reserve agora</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src=https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/e2/b9/3c/lizz-hotel.jpg?w=600&h=-1&s=1"
        class="card-img-top img-fluid h-50" alt="caesar">
      <div class="card-body">
        <h5 class="card-title text-center">Lizz Hotel</h5>
        <p class="card-text text-center">
          Avenida Anselmo Alves dos Santos 4925, Uberlândia, Minas Gerais 38407-845 Brasil</p>
        <a href="https://www.tripadvisor.com.br/Hotel_Review-g303400-d12297372-Reviews-Lizz_Hotel-Uberlandia_State_of_Minas_Gerais.html"
          target="_blank" class="btn btn-primary d-grid">Reserve agora</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img
        src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/c8/b6/3f/comfort-hotel-uberlandia.jpg?w=700&h=500&s=1"
        alt="impar" class="card-img-top img-fluid h-75">
      <div class="card-body">
        <h5 class="card-title text-center">Comfort Hotel Uberlândia</h5>
        <p class="card-text text-center">
          Avenida Anselmo Alves dos Santos 4925, Uberlândia, Minas Gerais 38407-845 Brasil
        <p>
          <a href="https://www.tripadvisor.com.br/Hotel_Review-g303400-d12297372-Reviews-Lizz_Hotel-Uberlandia_State_of_Minas_Gerais.html"
            target="_blank" class="btn btn-primary d-grid">Reserve agora</a>
      </div>
    </div>
  </div>
  </div>
  <!--Restaurante -->
  <div class="transporte" id="transp">
    <h2 class="text-center p-3 m-5 bg-dark bg-opacity-25" id="font-mc">
      Restaurantes
    </h2>
  </div>
  <div class="row row-cols-1 row-cols-md-4 g-lg-4 m-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Coco Bambu Uberlândia</h5>
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/19/51/8f/ba/recepcao.jpg"
          class="card-img-top img-fluid h-50" alt="Casa Da Esfiha">
        <p class="card-text text-center m-2">
          Avenida Joao Naves de Avila 1331 <br> Center Shopping Uberlândia<br>
          Minas Gerais 38408 Brasil
        </p>
        <a href="https://cocobambu.com/unidade/uberlandia/" target="_blank" class="btn btn-primary d-grid">Cardápio
          ⇗</a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Tropeiro Churrascaria</h5>
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/19/3a/79/c6/salao.jpg"
          class="card-img-top img-fluid h-50" alt="Casa Da Esfiha">
        <p class="card-text text-center m-2">Avenida João Naves de Ávila, número 1374 Em Frente ao Shopping Center,
          Uberlândia,<br> Minas Gerais 38400-097 Brasil</p>
        <a href="http://churrascariatropeiro.com.br/" target="_blank" class="btn btn-primary d-grid">Cardápio ⇗</a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Outback Steakhouse Tibery
        </h5>
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/07/51/67/ed/outback-steakhouse.jpg"
          class="card-img-top img-fluid h-50" alt="">
        <p class="card-text text-center m-3">Av. João Naves de Ávila, 1331, Tibery, Uberlândia, Minas Gerais 38405-140
          Brasil</p>
        <a href="https://www.outback.com.br/" target="_blank" class="btn btn-primary d-grid">Cardápio ⇗</a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Churrascaria Chimarrão</h5>
        <img src="https://media-cdn.tripadvisor.com/media/photo-p/0c/c6/86/eb/img-20160831-wa0023-largejpg.jpg"
          class="card-img-top img-fluid h-50" alt="">
        <p class="card-text text-center">Avenida Joao Naves de Avila 790, Uberlândia, Minas Gerais 38400-053 Brasil</p>
        <a href="https://www.facebook.com/ChimarraoUberlandia/" target="_blank"
          class="btn btn-primary d-grid m-3">Cardápio ⇗</a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Minas Tche Restaurante</h5>
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0f/32/50/9e/photo3jpg.jpg"
          class="card-img-top img-fluid h-50" alt="">
        <p class="card-text text-center m-2">Avenida Cesario Alvim 2150, Uberlândia, Minas Gerais 38400-694 Brasil</p>
        <a href="https://deliveryapp.neemo.com.br/delivery/12142/menu" target="_blank"
          class="btn btn-primary d-grid">Cardápio ⇗</a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Clementina Bar e Ristoranti
        </h5>
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/16/e0/44/d9/clementina-bar-e-ristoranti.jpg"
          class="card-img-top img-fluid h-50" alt="">
        <p class="card-text text-center m-3">Rua da Bandeira 400, Uberlândia, Minas Gerais 38405-174 Brasil</p>
        <a href="https://www.facebook.com/clementinabareristoranti/" target="_blank"
          class="btn btn-primary d-grid">Cardápio ⇗</a>
      </div>
    </div>
  </div>
  </div>
  <!--Onde ir -->
  <div class="section p-3 m-5 bg-dark bg-opacity-25" id="ondeir">
    <div class="box">
      <h2 class="text-center" id="font-mc">O que fazer em Uberlândia?</h2>
      <p class="text-center p-2">Ainda não sabe para onde ir? Aqui estão
        alguns destinos
        populares que você pode gostar.</p>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-lg-3 p-3 m-5">
    <div class="card" style="width: 18rem;">
      <img
        src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/04/a2/d6/48/parque-do-sabia.jpg?w=1200&h=1200&s=1"
        class="card-img-top img-fluid" alt="...">
      <div class="card-body">
        <h4 class="card-title text-center">Parque do Sabiá</h4>
        <p class="card-text"></p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="https://images.mnstatic.com/f5/05/f5052d3f4c8822ef9fb9dffc53b48d04.jpg"
        class="card-img-top img-fluid h-75" alt="...">
      <div class="card-body">
        <h4 class="card-title text-center">Museu Municipal de Uberlândia</h4>
        <p class="card-text"></p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img
        src="https://www.uberlandia.mg.gov.br/wp-content/uploads/2022/02/Cultura-Inscri%C3%A7%C3%B5es-Teatro-Municipa.jpeg"
        class="card-img-top img-fluid h-75" alt="...">
      <div class="card-body">
        <h4 class="card-title text-center">Teatro Municipal de Uberlândia</h4>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="BeloHorizonte.php">Anterior</a>
      </li>
      <li class="page-item"><a class="page-link" href="BeloHorizonte.php">1</a></li>
      <li class="page-item"><a class="page-link" href="Uberlandia.php">2</a></li>
      <li class="page-item"><a class="page-link" href="MontesClaros.php">3</a></li>
      <li class="page-item">
        <a class="page-link" href="MontesClaros.php">Próxima</a>
      </li>
    </ul>
  </nav>
  <?php
  include('footer.php');
  ?>
  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
  <script>
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollButton").style.display = "block";
      } else {
        document.getElementById("scrollButton").style.display = "none";
      }
    }

    function scrollToTop() {
      document.body.scrollTop = 0; // Para navegadores Safari
      document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE e Opera
    }
  </script>
</body>

</html>