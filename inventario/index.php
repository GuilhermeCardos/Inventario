<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img\icons\logoad.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonte Google  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <title>Inventário - ADMK</title>
  </head>
  <body id="corpo">
    <nav class="navbar navbar-light bg-light col-sm-12 naveCor" id="redon" >
        <img src="img\icons\chama.png" alt="Minha Figura"><a class="navbar-brand p" href="\inventario"><h1 class="titulo">Inventário</h1></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse texto" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="\inventario">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=novo">Cadastrar </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=listar">Itens Cadastrado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=buscar">Pesquisar</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- CONTAINER -->
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("Database\config.php");

                    switch(@$_REQUEST["page"]){
                        case "novo":
                            include("form_cadas/cadastrar_produto.php"); // FORMULARIO DE CADASTRO DO PRODUTO
                        break;
                        case "listar":
                            include("exibir_produ/listar_produto.php"); // LISTAR RESUMIDAMENTE AS INFORMAÇÕES DO PRODUTO
                        break;
                        case "salvar":
                            include("acao_Bd/salvar_produto.php"); // SALVAR NO BD AS INFORMAÇÕES DO PRODUTO FEITA NO CADASTRO
                        break;
                        case "buscar":
                            include("search/buscar_produto.php"); // BUSCAR O PRODUTO PELO CÓDIGO OU PELO NOME
                        break;
                        case "details":
                            include("search/buscar_produto.php"); // EXIBIR MAIS DETALHES DO PRODUTO 
                        break;
                        case "edite":
                            include("form_edicao/edite_produto.php"); // EDITAR O PRODUTO
                        break;
                        default:
                            print"<h1 class='subtitulo'>Seja Bem-Vindo!</h1>";
                    }

                ?>
        
            </div>

        </div>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
  </body>
</html>