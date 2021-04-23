<?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE semexe";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully"."<br>";
  } else {
    echo "Error creating database: " . $conn->error."<br>";
  }

//create table
$sql ="CREATE TABLE semexe.tb_cliente (
    cli_id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    cli_nome varchar(100) ,
    cli_cpf varchar(14) ,
    cli_email varchar(50),
    cli_telefone varchar(14),
    cli_cep varchar(14),
    cli_endereco varchar(50),
    cli_numero varchar(15),
    cli_complemento varchar(50),
    cli_cidade varchar(50),
    cli_estado varchar(50))";

if ($conn->query($sql) === TRUE) {
echo "Table created successfully"."<br>";
} else {
echo "Error creating database: " . $conn->error."<br>";
}


//Insert Table
$sql= "INSERT INTO semexe.tb_cliente
            (cli_nome,
            cli_cpf,
            cli_email,
            cli_telefone,
            cli_cep,
            cli_endereco,
            cli_numero,
            cli_complemento,
            cli_cidade,
            cli_estado)
       VALUES
            ('Usuario Teste', 
            '072.750.580-73',
            'usuario@email.com',
            '(21)73125-5277',
            '23098-078',
            'Rua 30 ',
            '22',
            'sn',
            'Rio de Janeiro',
            'RJ')";

if ($conn->query($sql) === TRUE) {

    echo "columns created successfully"."<br>";
    } else {
    echo "Error creating database: " . $conn->error."<br>";
    }
    
    
    
    
$conn->close();





?> 