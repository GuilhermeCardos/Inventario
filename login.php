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
            
        </nav>
    
        <!-- CONTAINER LOGIN -->
        <div class="login texto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <div class="card">
                            <div class="card-body "><h3>Login</h3> </div>
                            <div class="card-body">
                                <form action="login_db.php" method="POST">
                                    <div>
                                        <div class="mb-3">
                                            <label for="">Usuário</label>
                                            <input type="text" name="usuario" id="usuario" class="form-control" required>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <label for="">Senha:</label>
                                            <input type="password" name="senha" id="senha" class="form-control" required>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-success">Entrar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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