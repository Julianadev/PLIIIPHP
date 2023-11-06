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
    <h1>Dados informados</h1>
    <?php
    //Variáveis criadas para armazenar dados recebidos pelo formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $msg = $_POST['mensagem'];

    //Escrevendo as variáveis criadas com o conteúdo recebido pelo formulário
    echo "Nome: " . $nome . "<br>";
    echo "E-mail:" . $email . "<br>";
    echo "Mensagem:" . $msg . "<br>";

    //Criando um vetor PHP para armazenar todas as variáveis
    $contato = array("Nome" => $nome, "Email" => $email, "Mensagem" => $msg);

    //Escrevendo o vetor PHP criado com todas as variáveis
    echo "<hr> Vetor criado: <br>";
    print_r($contato);

    //Verificar se o arquivo dados.json já existe
    if (file_exists("dados.json")) {
        // se existe, extrai a informação do arquivo
        $string = file_get_contents("dados.json");
        // transformando o arquivo dados.json em um vetor PHP
        $json = json_decode($string, true);
    }

    // Adicionando no vetor $json o vetor $contato com as variáveis recebidas pelo formulário
    $json["contatos"][] = $contato;

    // abre o arquivo dados.json em modo de escrita
    $fp = fopen('dados.json', 'w');
    
    //Se der algum erro, entra neste if
    if ($fp == false) {
        print(error_get_last());
    }
    // escreve no arquivo em json
    fwrite($fp, json_encode($json));

    // fecha o arquivo
    fclose($fp);

    ?>
    <h3 style='text-align:center;'>Contato cadastrado com sucesso.</h3>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
            </script>
</body>

</html>