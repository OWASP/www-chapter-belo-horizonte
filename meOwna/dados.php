<?php
//Este código realiza o download do arquivo JSON com os dados do usuário, contexto para Local File Download e IDOR
if(isset($_POST['dados'])){
	$arquivo = $_POST['dados'];
		if (!file_exists($arquivo))
   		die('Arquivo não existe!');
	header('Content-type: octet/stream');
	header('Content-disposition: attachment; filename="'.$arquivo.'";');
	header('Content-Length: '.filesize($arquivo));
	readfile($arquivo);
	exit;
}
?>
