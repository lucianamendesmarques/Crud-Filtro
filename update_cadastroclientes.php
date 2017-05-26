<?php

$id = intval($_REQUEST['id']);
$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$telefone = $_REQUEST['telefone'];
$email = $_REQUEST['email'];

include 'conn.php';

$sql = "update cadastroclientes set nome='$nome',sobrenome='$sobrenome',telefone='$telefone',email='$email' where id=$id";
@mysql_query($sql);
echo json_encode(array(
	'id' => $id,
	'nome' => $nome,
	'sobrenome' => $sobrenome,
	'telefone' => $telefone,
	'email' => $email
));
?>