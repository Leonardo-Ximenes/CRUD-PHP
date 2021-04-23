<?php
include('conection.php');
include('Cliente.php');
include('DaoCliente.php');

$db  = new DaoCliente();


$cli_id = isset($_POST['id']) && !empty($_POST['id']) ? $_POST['id'] : null;

$db->Deletar($cli_id);

?>