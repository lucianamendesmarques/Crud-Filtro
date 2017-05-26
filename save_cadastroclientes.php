<?php

$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$telefone = $_REQUEST['telefone'];
$email = $_REQUEST['email'];

include 'conn.php';

$sql = "insert into cadastroclientes(nome,sobrenome,telefone,email) values('$nome','$sobrenome','$telefone','$email')";
@mysql_query($sql);
echo json_encode(array(
	'id' => mysql_insert_id(),
	'nome' => $nome,
	'sobrenome' => $sobrenome,
	'telefone' => $telefone,
	'email' => $email
));

?>