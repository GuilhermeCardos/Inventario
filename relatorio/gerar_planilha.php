<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<?php
            include("..\Database\config.php");

            if (!empty($_POST['local'])) {
                $local = $_POST['local'];
            }else {
                $local = "MATRIZ";
            }
        
            $conn = new MySQLi(HOST, USER, PASS, BASE);


            // Definimos o nome do arquivo que será exportado
            $arquivo = 'RELATÓRIO '.$local.'.xls';
            
            // Criamos uma tabela HTML com o formato da planilha
            $html = '';
            $html .= '<table border="1">';
            $html .= '<tr>';
            $html .= '<td colspan="7">Planilha Mensagem de Contatos</tr>';
            $html .= '</tr>';
            
            
            $html .= '<tr>';
            $html .= '<td><b>Código</b></td>';
            $html .= '<td><b>Produto</b></td>';
            $html .= '<td><b>Quantidade</b></td>';
            $html .= '<td><b>Qualidade</b></td>';
            $html .= '<td><b>Local</b></td>';
            $html .= '<td><b>Setor</b></td>';
            $html .= '<td><b>Observação</b></td>';
            $html .= '</tr>';
            
            //Selecionar tos itens da tabela 
            $result_relatorio = "SELECT * FROM produto WHERE local_produto = '{$local}';";
            $resultado_relatorio = mysqli_query($conn , $result_relatorio);
            
            while($row_relatorio = mysqli_fetch_assoc($resultado_relatorio)){
                $html .= '<tr>';
                $html .= '<td>'.$row_relatorio["cod_produto"].'</td>';
                $html .= '<td>'.$row_relatorio["name_produto"].'</td>';
                $html .= '<td>'.$row_relatorio["qtd_produto"].'</td>';
                $html .= '<td>'.$row_relatorio["qld_produto"].'</td>';
                $html .= '<td>'.$row_relatorio["local_produto"].'</td>';
                $html .= '<td>'.$row_relatorio["setor_produto"].'</td>';
                $html .= '<td>'.$row_relatorio["obs_produto"].'</td>';
                $html .= '</tr>';
                ;
            }
            // Configurações header para forçar o download
            header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
            header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
            header ("Cache-Control: no-cache, must-revalidate");
            header ("Pragma: no-cache");
            header ("Content-type: application/x-msexcel");
            header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
            header ("Content-Description: PHP Generated Data" );
            // Envia o conteúdo do arquivo
            echo $html;
            exit; 
        ?>
	</body>
</html>