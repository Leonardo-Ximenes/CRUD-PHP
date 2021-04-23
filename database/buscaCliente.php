<?php

include('conection.php');
include('Cliente.php');
include('DaoCliente.php');

$db  = new DaoCliente();


$cli_id = isset($_POST['id']) && !empty($_POST['id']) ? $_POST['id'] : null;

$rows = $db->BuscaCliente($cli_id);
echo json_encode($rows);

?>