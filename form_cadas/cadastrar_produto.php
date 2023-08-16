<h3 class="text-center subtitulo">Cadastrar Produto</h3>
    
<div class="container center mb-3 p-2 texto" id="redon">
    
    <!-- NOME DO PRODUTO --> 
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
    
        <!-- CONGREGAÇÕES \\-->
        <div class="form-group p-2 d-flex justify-content-end ">
            <select class="rounded  p-1" type="text" id="local" name="local">
                <option value="MATRIZ" selected>Matriz</option>
                <option value="CATIRI">Catiri</option>
                <option value="SPARAIBA">S. Paraiba</option>
                <option value="BARROSO">Barroso</option>
            </select>
        </div>
        <!--Name do produto-->
        <fieldset>
            <legend class="mt-3"><label for="name_produto">Nome do Produto:</label></legend>
            <div class="form-group p-2">
                <input type="text" id="name_produto" name="name_produto" class="rounded w-100 p-1" placeholder="Nome do produto" required>
            </div> 
        </fieldset>

        <!-- QUANTIDADE -->
        <legend><label for="qtd_produto">Quantidade:</label></legend>
        <div class="form-group p-2">
            <input class="rounded p-1 " type="number" id="qtd_produto" name="qtd_produto" min="0" placeholder="Quantidade" required>
        </div>
        
        <!-- LOCAL \\ACRESCENTAR TAMBÉM NO FORMULARIO DE EDIÇÃO-->
        <legend>Local:</legend>
        <div class="form-group p-2 ">
            <select class="rounded  p-1" type="text" id="setor" name="setor" required>
                <option> </option>
                <option value="TEMPLO">Templo</option>
                <option value="CANTINA">Cantina</option>
                <option value="SECRETARIA">Secretaria</option>
                <option value="ESTACIONAMENTO">Estacionamento</option>
            </select>
        </div>

        <!-- QUALIDADE-->
        <legend>Estado:</legend>
        <fieldset class="form-group p-2 row">
            <div class="form-check form-check-inline  p-1">
                <label class="form-control" for="qld_ruim">
                <input type="radio" id="qld_ruim" name="qld_produto" value=" RUIM" checked> 
                Ruim </label>
            </div>
            <div class="form-check form-check-inline p-1">
                <label class="form-control" for="qld_bom">
                <input type="radio" id="qld_bom" name="qld_produto" value=" BOM">
                Bom </label>
            </div>
            <div class="form-check form-check-inline p-1">
                <label class="form-control" for="qld_otimo">
                <input type="radio" id="qld_otimo" name="qld_produto" value=" ÓTIMO">
                Ótimo </label>
            </div>
        </fieldset>
        
        <!-- OBSERVAÇÃO -->
        <legend><label for="obs_produto">Observação:</label></legend>
        <div class="form-group m-0 p-2">
            <textarea class="rounded w-100 " name="obs_produto" id="obs_produto" name="obs_produto" cols="40" rows="6" maxlength="150" required></textarea>
        </div>

        <!-- ENVIAR -->
        <div class="form-group m-2">
            <button type="submit" class="btn btn-primary p-2" style="width: 8rem;"> Enviar</button>
        </div>

    </form>
</div>
