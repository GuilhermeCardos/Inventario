<h3 class="text-center subtitulo">Editar produto</h3>
<?php
    $cod_prod = $_REQUEST["id"];
    $local = $_REQUEST["local"];
    print "<p class='text-center subtitulo'>".$local."</p>";
    $sql = "SELECT * FROM produto WHERE cod_produto =".$cod_prod.";";
    $res = $conn->query($sql);
    $row = $res-> fetch_object();
?>
<div class="container center mb-3 p-2">
    
    <!-- NOME DO PRODUTO --> 
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->cod_produto;?>">
        <input type="hidden" name="local" value="<?php print $local;?>">

        <legend class="mt-3"><label for="name_produto">Nome do Produto:</label></legend>
        <div class="form-group p-2">
            <input type="text" id="name_produto" name="name_produto" value="<?php print $row->name_produto;?>" class="rounded w-100 p-1" placeholder="Nome do produto" required>
        </div> 

        <!-- QUANTIDADE -->
        <legend><label for="qtd_produto">Quantidade:</label></legend>
        <div class="form-group p-2">
            <input class="rounded p-1 " type="number" id="qtd_produto" name="qtd_produto" required min="0" placeholder="Quantidade" value="<?php print $row->qtd_produto;?>">
        </div>
        
        <!-- LOCAL -->
        <legend>Local:</legend>
        <div class="form-group p-2 ">
            <select class="rounded  p-1" type="text" id="setor" name="setor">
                <?php
                    switch ($row->setor_produto) {
                        case "TEMPLO":
                            print "<option value='TEMPLO' selected='selected'>Templo</option>";
                            print "<option value='CANTINA'>Cantina</option>";
                            print "<option value='ESTACIONAMENTO'>Estacionamento</option>";
                            print "<option value='SECRETARIA'>Secretaria</option>";
                        break;
                        case "CANTINA":
                            print "<option value='TEMPLO' >Templo</option>";
                            print "<option value='CANTINA' selected='selected'>Cantina</option>";
                            print "<option value='ESTACIONAMENTO'>Estacionamento</option>";
                            print "<option value='SECRETARIA'>Secretaria</option>";
                        break;
                        case "ESTACIONAMENTO":
                            print "<option value='TEMPLO' >Templo</option>";
                            print "<option value='CANTINA' >Cantina</option>";
                            print "<option value='ESTACIONAMENTO' selected='selected'>Estacionamento</option>";
                            print "<option value='SECRETARIA'>Secretaria</option>";
                        break;
                        case "SECRETARIA":
                            print "<option value='TEMPLO' >Templo</option>";
                            print "<option value='CANTINA'>Cantina</option>";
                            print "<option value='ESTACIONAMENTO'>Estacionamento</option>";
                            print "<option value='SECRETARIA' selected='selected'>Secretaria</option>";
                        break;
                    }

                ?>
            </select>
        </div>

        <!-- QUALIDADE -->
        <legend>Estado:</legend>
        <fieldset class="form-group p-2 row">
        <?php
            switch ($row->qld_produto) {
                case "RUIM":
                    print "<div class='form-check form-check-inline  p-1'>";
                        print "<label class='form-control' for='qld_ruim'>";
                        print "<input type='radio' id='qld_ruim' name='qld_produto' value='RUIM' checked>"; 
                        print " RUIM </label>";
                    print "</div>";
                    print "<div class='form-check form-check-inline  p-1'>";
                        print "<label class='form-control' for='qld_ruim'>";
                        print "<input type='radio' id='qld_bom' name='qld_produto' value='BOM'>"; 
                        print " BOM </label>";
                    print "</div>";
                    print "<div class='form-check form-check-inline  p-1'>";
                        print "<label class='form-control' for='qld_ruim'>";
                        print "<input type='radio' id='qld_otimo' name='qld_produto' value='ÓTIMO'>"; 
                        print " ÓTIMO </label>";
                    print "</div>";;
                break;
                case "BOM":
                    print "<div class='form-check form-check-inline  p-1'>";
                        print "<label class='form-control' for='qld_ruim'>";
                        print "<input type='radio' id='qld_ruim' name='qld_produto' value='RUIM' checked>"; 
                        print " RUIM </label>";
                    print "</div>";
                    print "<div class='form-check form-check-inline  p-1'>";
                        print "<label class='form-control' for='qld_ruim'>";
                        print "<input type='radio' id='qld_bom' name='qld_produto' value='BOM' checked>"; 
                        print " BOM </label>";
                    print "</div>";
                    print "<div class='form-check form-check-inline  p-1'>";
                        print "<label class='form-control' for='qld_ruim'>";
                        print "<input type='radio' id='qld_otimo' name='qld_produto' value='ÓTIMO'>"; 
                        print " ÓTIMO </label>";
                    print "</div>";
                break;
                case "ÓTIMO":
                    print "<div class='form-check form-check-inline  p-1'>";
                        print "<label class='form-control' for='qld_ruim'>";
                        print "<input type='radio' id='qld_ruim' name='qld_produto' value='RUIM'>"; 
                        print " RUIM </label>";
                    print "</div>";
                    print "<div class='form-check form-check-inline  p-1'>";
                        print "<label class='form-control' for='qld_ruim'>";
                        print "<input type='radio' id='qld_bom' name='qld_produto' value='BOM'>"; 
                        print " BOM </label>";
                    print "</div>";
                    print "<div class='form-check form-check-inline  p-1'>";
                        print "<label class='form-control' for='qld_ruim'>";
                        print "<input type='radio' id='qld_otimo' name='qld_produto' value='ÓTIMO' checked>"; 
                        print " ÓTIMO </label>";
                    print "</div>";
                break;
                default:
                    print "<div class='form-check form-check-inline  p-1'>";
                        print "<label class='form-control' for='qld_ruim'>";
                        print "<input type='radio' id='qld_ruim' name='qld_produto' value='RUIM'>"; 
                        print " RUIM </label>";
                    print "</div>";
                    print "<div class='form-check form-check-inline  p-1'>";
                        print "<label class='form-control' for='qld_ruim'>";
                        print "<input type='radio' id='qld_bom' name='qld_produto' value='BOM'>"; 
                        print " BOM </label>";
                    print "</div>";
                    print "<div class='form-check form-check-inline  p-1'>";
                        print "<label class='form-control' for='qld_ruim'>";
                        print "<input type='radio' id='qld_otimo' name='qld_produto' value='ÓTIMO' checked>"; 
                        print " ÓTIMO </label>";
                    print "</div>";
            }

        ?>
                
        </fieldset>
        
        <!-- OBSERVAÇÃO -->
        <legend><label for="obs_produto">Observação:</label></legend>
        <div class="form-group m-0 p-2">
            <textarea class="rounded w-100 " name="obs_produto" id="obs_produto" name="obs_produto" cols="40" rows="6" maxlength="150" required><?php print $row->obs_produto;?></textarea>
        </div>

        <!-- ENVIAR -->
        <div class="form-group m-2 ">
            <button type="submit" class="btn btn-primary p-2" style="width: 8rem;"> Enviar</button>
            <button type='button' onclick ="location.href='?page=details&id=<?php print $row->cod_produto;?>&local=<?php print $local;?>';" class='btn btn-danger p-2' style='width: 8rem'>Cancelar</button>
        </div>
        
    </form>
</div>
