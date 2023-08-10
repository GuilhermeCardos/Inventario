    <h3 class="text-center mb-4 p-2 subtitulo">Produtos</h3>
    
    <!-- CONGREGAÇÃO \\ACRESCENTAR TAMBÉM NO FORMULARIO DE EDIÇÃO-->
    <form action="" method="post">
        <div class="form-group p-2 d-flex justify-content-end ">
            <select class="rounded  p-1" type="text" id="local" name="local" onchange="this.form.submit()">
                <option selected> </option>
                <option value="MATRIZ">Matriz</option>
                <option value="CATIRI">Catiri</option>
                <option value="SPARAIBA">S.Paraiba</option>
                <option value="BARROSO">Barroso</option>
            </select>
        </div>
    </form>

<?php
    header("Refresh:15");
    if(isset($_POST["local"])){
        $local_prod  = $_POST["local"];
    }else if(isset($_REQUEST["local"])){
        $local_prod  = $_REQUEST["local"];
    }else {$local_prod = "MATRIZ";}
        
        
    print "<p class='text-center subtitulo'>".$local_prod."</p>";

    $sql = "SELECT name_produto, cod_produto, qtd_produto FROM produto WHERE local_produto= '{$local_prod}' ;";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print"<table class='table table-hover table-striped table-bordered tabela texto' id='redon' >";
        print "<tr class='w-25 text-center'>";
            print"<th>Código</th>";
            print"<th>Nome</th>";
            print"<th>Total</th>";
            print"<th style='font-size: 14px'>Detalhe</th>";
        print "</tr>";
        while ($row = $res -> fetch_object()){ //fetch_object = Busca a próxima linha de um conjunto de resultados como um objeto
            print"<tr class='text-center texto '>";
                print "<td>".$row -> cod_produto."</td>";
                print "<td>".$row -> name_produto."</td>";
                print "<td>".$row -> qtd_produto."</td>";
                print "<td> <a href='?page=details&id=".$row -> cod_produto."&local=".$local_prod."'><img src='img\icons\details.png' alt='Detalhes'></a></td>";
                //print "<td> <a href='detalhes.php'><img src='img\icons\details.png' alt='Detalhes'></a></td>";
            print"</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'> Não encontrou resultado!</p>";
    }
    