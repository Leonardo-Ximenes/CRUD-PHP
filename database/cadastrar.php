<?php

include('conection.php');
include('Cliente.php');
include('DaoCliente.php');


$cli = new Cliente();
$db  = new DaoCliente();


$nome       = isset($_POST['name']) && !empty($_POST['name']) ? $_POST['name'] : '';
$cpf        = isset($_POST['cpf']) && !empty($_POST['cpf']) ? $_POST['cpf'] : '';
$email      = isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : '';
$cel        = isset($_POST['cel']) && !empty($_POST['cel']) ? $_POST['cel'] : '';
$cep        = isset($_POST['cep']) && !empty($_POST['cep']) ? $_POST['cep'] : '';
$address    = isset($_POST['address']) && !empty($_POST['address']) ? $_POST['address'] : '';
$number     = isset($_POST['number']) && !empty($_POST['number']) ? $_POST['number'] : '';
$complement = isset($_POST['complement']) && !empty($_POST['complement']) ? $_POST['complement'] : '';
$city       = isset($_POST['city']) && !empty($_POST['city']) ? $_POST['city'] : '';
$state      = isset($_POST['state']) && !empty($_POST['state']) ? $_POST['state'] : '';


$cli->setCliNome($nome);
$cli->setCliCpf($cpf);
$cli->setEmail($email);
$cli->setTelefone($cel);
$cli->setCep($cep);
$cli->setEndereco($address);
$cli->setNumero($number);
$cli->setComplemento($complement);
$cli->setCidade($city);
$cli->setEstado($state);

$db->Inserir($cli);




?>