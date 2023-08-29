<h3 class="text-center mb-4 p-2 subtitulo">Relatório</h3>

<form class="row g-3 d-flex justify-content-center relatorio"  action="relatorio/gerar_planilha.php" method="POST">
  <div class="col-auto">
    <select class="rounded  p-1 pl-1  h-100 texto" type="text" id="local" name="local">
      <option value="MATRIZ" selected default>Matriz</option>
      <option value="CATIRI">Catiri</option>
      <option value="S.PARAIBA">S. Paraiba</option>
      <option value="BARROSO">Barroso</option>
      <option value="MIECIMO">Miécimo</option>
      <option value="1abril">1º de Abril</option>
      <option value="S.fernando">São Fernando</option>
    </select>
  </div>
  <div class="col-auto">
  <button class="btn btn-success texto" type="submit">Gerar Excel</button>
  </div>
</form>
