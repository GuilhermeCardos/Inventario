<h3 class="text-center mb-4 p-2 subtitulo">Pesquisar</h3>
<nav class="navbar justify-content-center">
  
  <form class="form-inline pb-5 d-flex justify-content-end" action="?page=buscar" method="POST">
    <select class="rounded  p-1 mb-5" type="text" id="local" name="local">
      <option value="MATRIZ" selected default>Matriz</option>
      <option value="CATIRI">Catiri</option>
      <option value="S.PARAIBA">S. Paraiba</option>
      <option value="BARROSO">Barroso</option>
    </select>
    <input class="form-control col-10 col-sm-10 col-md-10" type="search" required placeholder="Digite o código." aria-label="Search" name="consultar">
    <button class="btn btn-outline-success col-2 col-md-2" type="submit"><img src='img\icons\loupe.png' alt='LupaIcons'></button>
  </form>
</nav>

<?php
  if (isset($_POST['consultar'])) {
    $cod_prod = $_POST['consultar'];
    $local = $_REQUEST['local'];
    
    print "<p class='text-center subtitulo'>".$local."</p>";
    //$sql = "SELECT * FROM produto WHERE cod_produto LIKE '%".$cod_prod."%'"; // CONSULTA APENAS COM O CÓDIGO DO PRODUTO \\
    $sql = "SELECT * FROM produto WHERE (cod_produto LIKE '%".$cod_prod."%' OR name_produto LIKE '%".$cod_prod."%' AND local_produto = '".$local."')";
    //      SELECT * FROM produto WHERE cod_produto LIKE '%27%' OR name_produto LIKE '%cad%' AND local_produto='Matriz';
    $res = $conn->query($sql);
    
    $qtd = $res->num_rows;
  
    if($qtd > 0){     
      while ($row = $res -> fetch_object())
      {
        print"<table class='rounded table table-striped table-hover table-bordered texto'>";
          print"<tr>";
            print "<th>Codigo do produto: </th>";
            print "<td colspan='3'>".$row -> cod_produto."</td>";
          print"</tr>";
          print"<tr>";
            print "<th>Nome: </th>";
            print "<td colspan='3'>".$row -> name_produto."</td>";
          print"</tr>";
          print"<tr>";
            print "<th>Total: </th>";
            print "<td colspan='3'>".$row -> qtd_produto."</td>";
          print"</tr>";
          print"<tr>";
            print "<th>Qualidade: </th>";
            print "<td colspan='3'>".$row -> qld_produto."</td>";
          print"</tr>";
          print"<tr>";
            print "<th>Local: </th>";
            print "<td colspan='3'>".$row -> setor_produto."</td>";
          print"</tr>";
          print"<tr>";
            print "<th>Observação: </th>";
            print "<td colspan='3'>".$row -> obs_produto."</td>";
          print"</tr>";
        print "</table>";
        
        print" <div class='m-2 d-flex justify-content-center mb-5'>";
          print "<button onclick =\"location.href='?page=edite&id=".$row -> cod_produto."&local=".$local."';\" type='submit' class='btn btn-success p-2' style='width: 8rem';> Editar</button>";
          print "<button onclick =\"if(confirm('Tem certeza Varão?')){location.href='?page=salvar&acao=excluir&id=".$row->cod_produto."';}else{false;}\" type='submit' class='btn btn-danger p-2' style='width: 8rem';> Excluir</button>";
        print "</div>";
      }
    }else{
        print "<p class='alert alert-danger'> Não encontrou resultado!</p>";
    }
  }else if (isset ($_REQUEST["id"])) {
    $cod_prod = $_REQUEST["id"];
    $local = $_REQUEST["local"];
    print "<p class='text-center subtitulo'>".$local."</p>";

    $sql = "SELECT * FROM produto WHERE cod_produto =".$cod_prod.";";
    $res = $conn->query($sql);
    
    $qtd = $res->num_rows;
  
    if($qtd > 0){     
      while ($row = $res -> fetch_object())
      {
        print"<table class='rounded table table-striped table-hover table-bordered texto'>";
          print"<tr>";
            print "<th>Codigo do produto: </th>";
            print "<td colspan='3'>".$row -> cod_produto."</td>";
          print"</tr>";
          print"<tr>";
            print "<th>Nome: </th>";
            print "<td colspan='3'>".$row -> name_produto."</td>";
          print"</tr>";
          print"<tr>";
            print "<th>Total: </th>";
            print "<td colspan='3'>".$row -> qtd_produto."</td>";
          print"</tr>";
          print"<tr>";
            print "<th>Qualidade: </th>";
            print "<td colspan='3'>".$row -> qld_produto."</td>";
          print"</tr>";
          print"<tr>";
            print "<th>Local: </th>";
            print "<td colspan='3'>".$row -> setor_produto."</td>";
          print"</tr>";
          print"<tr>";
            print "<th>Observação: </th>";
            print "<td colspan='3'>".$row -> obs_produto."</td>";
          print"</tr>";
        print "</table>";
        
        print" <div class='d-flex justify-content-center mb-5'>";
          print "<button onclick =\"location.href='?page=edite&id=".$row -> cod_produto."&local=".$local."';\" type='submit' class='btn btn-success' style='width: 8rem';> Editar</button>";
          print "<button onclick =\"if(confirm('Tem certeza Varão?')){location.href='?page=salvar&acao=excluir&id=".$row->cod_produto."&local=".$local."';}else{false;}\" type='submit' class='btn btn-danger p-2' style='width: 8rem';> Excluir</button>";
        print "</div>";
      }
    }else{
        print "<p class='alert alert-danger'> Não encontrou resultado!</p>";
    }
  }else{

  }
?>
