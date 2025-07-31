<?php

//Este é um simples código vulnerável a Redirecionamento Aberto.
if (isset($_GET['r'])){
	header('Location: '.$_GET['r']);
}

?>
