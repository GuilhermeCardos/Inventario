<?php
    session_start();

    if( empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){
        print"<script> location.href='login.php';</script>";
    }

    include('Database/config.php');

    $usuario= $_POST['usuario'];
    echo $usuario;

    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE login_name = '{$usuario}' AND pass_user = '{$senha}'";

    $res = $conn -> query($sql) or die ($conn->error);

    $row = $res->fetch_object();

    $qtd = $res-> num_rows;

    if($qtd>0){
        $_SESSION["usuario"]= $usuario;
        $_SESSION["name"] = $row-> full_name_user;     

      //$_SESSION["tipo"] = $row -> tipo  // TIPOS DE PRIVILÉGIOS - ADMIN | USUÁRIO COMUN  

      print"<script> location.href='index.php';</script>";
    }else
    {
        print"<script> alert ('Usuário e/ou senha incorretos! ');</script>";
        print"<script> location.href='login.php';</script>";
    }
