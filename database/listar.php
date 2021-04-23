<?php
include('conection.php');
include('Cliente.php');
include('DaoCliente.php');

$db  = new DaoCliente();

$clientes = $db->ExibeClientes();
echo json_encode($clientes);