<?php

    switch (@$_REQUEST["acao"]) {
        case 'cadastrar':
            $name_prod   = strtoupper($_POST["name_produto"]);
            $qtd_prod    = $_POST["qtd_produto"];
            $local_prod  = $_POST["local"];
            $setor_prod  = $_POST["setor"];
            $qld_prod    = $_POST["qld_produto"];
            $obs_prod    = strtoupper ($_POST["obs_produto"]);

            $code_prod = random_int(000000, 999999);

            $sql = "INSERT INTO produto (name_produto, cod_produto, qtd_produto, qld_produto, local_produto, setor_produto, obs_produto) VALUES ('{$name_prod}','{$code_prod}','{$qtd_prod}','{$qld_prod}','{$local_prod}','{$setor_prod}', '{$obs_prod}');";

            $res = $conn->query($sql);

            if($res == true){
                print "<script> alert('Cadastrado com sucesso'); </script>";
                print "<script> location.href='?page=novo'; </script>";
            }else
            {
                print "<script> alert('Não foi possível salvar! '); </script>";
                print "<script> location.href='?page=novo'; </script>";
            }
        break;
        case 'editar':
            # code...
            $name_prod   = strtoupper($_POST["name_produto"]);
            $qtd_prod    = $_POST["qtd_produto"];
            $setor_prod  = $_POST["setor"];
            $qld_prod    = $_POST["qld_produto"];
            $obs_prod    = strtoupper ($_POST["obs_produto"]);

            //$sql = "UPDATE"
            $sql = "UPDATE produto SET name_produto='$name_prod',qtd_produto='$qtd_prod',qld_produto='$qld_prod',setor_produto='$setor_prod',obs_produto='$obs_prod' WHERE cod_produto='{$_REQUEST["id"]}';";
            $Eres = $conn->query($sql);

            if($Eres == true){
                print "<script> alert('Alterado com sucesso'); </script>";
                print "<script> location.href='?page=details&id={$_REQUEST["id"]}&local={$_REQUEST["local"]}'; </script>";
            }else
            {
                print "<script> alert('Não foi possível alterar! '); </script>";
                print "<script> location.href='?page=novo'; </script>";
            }
        break;
        case 'excluir':
            # code...
            // "DELETE"
            $sql = "DELETE FROM produto WHERE cod_produto='{$_REQUEST["id"]}';";         
            $Eres = $conn->query($sql);

            if($Eres == true){
                print "<script> alert('Excluído com sucesso'); </script>";
                print "<script> location.href='?page=listar&local=".$_REQUEST['local']."'; </script>";
            }else
            {
                print "<script> alert('Não foi possível escluir! '); </script>";
                print "<script> location.href='?page=novo'; </script>";
            }
        break;  
        
    }
    
    #CHECK CODE PRODUCT 
    function gerarCode(){
        $code = random_int(000000, 999999);   
        $ncode= check_code($code);
        return $ncode;
    }
    function check_code($code){
        $sql = "SELECT cod_produto FROM produto";
        $result = $conn->query($sql);   
        
        print $result;
        
    }
    