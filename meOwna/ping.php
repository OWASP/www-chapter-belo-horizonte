<?php
	//Este código está vulnerável a OS Command Injection
	header('Access-Control-Allow-Origin: *');
	$dominio=$_POST['d'];
	$ip=shell_exec("ping -c1 ".$dominio." | grep 'PING' | awk -F ' ' '{print $3}'");
	$dados=array('dominio: ' => $dominio,'Endereço IP: ' => $ip);
	echo json_encode($dados);
?>
