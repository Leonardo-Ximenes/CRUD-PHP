<?php

require_once "Cliente.php";

class DaoCliente {

    public static $instance;


    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoCliente();

        return self::$instance;
    }

    public function Inserir(Cliente $usuario) {
        try {
                $p_sql = NUll;

                $sql = "INSERT INTO tb_cliente (                        
                        cli_nome,
                        cli_cpf,
                        cli_email,
                        cli_telefone,
                        cli_cep,
                        cli_endereco,
                        cli_numero,
                        cli_complemento,
                        cli_cidade,
                        cli_estado)
                        VALUES (                        
                        :cli_nome,
                        :cli_cpf,
                        :cli_email,
                        :cli_telefone,
                        :cli_cep,
                        :cli_endereco,
                        :cli_numero,
                        :cli_complemento,
                        :cli_cidade,
                        :cli_estado)";

                $p_sql = Conexao::getInstance()->prepare($sql);
                
                $p_sql->bindValue(":cli_nome", $usuario->getCliNome());
                $p_sql->bindValue(":cli_cpf", $usuario->getCliCpf());
                $p_sql->bindValue(":cli_email", $usuario->getEmail());
                $p_sql->bindValue(":cli_telefone", $usuario->getTelefone());
                $p_sql->bindValue(":cli_cep", $usuario->getCep());
                $p_sql->bindValue(":cli_endereco", $usuario->getEndereco());
                $p_sql->bindValue(":cli_numero", $usuario->getNumero());
                $p_sql->bindValue(":cli_complemento", $usuario->getComplemento());
                $p_sql->bindValue(":cli_cidade", $usuario->getCidade());
                $p_sql->bindValue(":cli_estado", $usuario->getEstado());

            return $p_sql->execute();

        } catch (Exception $e) {
            print "Erro:".$e;
        }
    }

    public function Editar(Cliente $usuario) {
        try {
                $p_sql = NUll;

                $sql   = "UPDATE tb_cliente 
                          SET cli_nome  = :cli_nome,
                              cli_cpf   = :cli_cpf,
                              cli_email = :cli_email,
                              cli_telefone = :cli_telefone,
                              cli_cep = :cli_cep,
                              cli_endereco = :cli_endereco,
                              cli_numero = :cli_numero,
                              cli_complemento = :cli_complemento,
                              cli_cidade = :cli_cidade,
                              cli_estado = :cli_estado
                          WHERE cli_id = :cli_id";

                $p_sql = Conexao::getInstance()->prepare($sql);
                
                $p_sql->bindValue(":cli_nome", $usuario->getCliNome());
                $p_sql->bindValue(":cli_cpf", $usuario->getCliCpf());
                $p_sql->bindValue(":cli_email", $usuario->getEmail());
                $p_sql->bindValue(":cli_telefone", $usuario->getTelefone());
                $p_sql->bindValue(":cli_cep", $usuario->getCep());
                $p_sql->bindValue(":cli_endereco", $usuario->getEndereco());
                $p_sql->bindValue(":cli_numero", $usuario->getNumero());
                $p_sql->bindValue(":cli_complemento", $usuario->getComplemento());
                $p_sql->bindValue(":cli_cidade", $usuario->getCidade());
                $p_sql->bindValue(":cli_estado", $usuario->getEstado());
                $p_sql->bindValue(":cli_id", $usuario->getCliId());
                
                return $p_sql->execute();

        } catch (Exception $e) {
                print "Erro: ".$e;
        }
    }

    public function Deletar($cli_id) {
        try {
                $p_sql = null;
                $sql   = "DELETE FROM tb_cliente WHERE cli_id = :cli_id";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(":cli_id", $cli_id);

                return $p_sql->execute();

        } catch (Exception $e) {
            print "Erro: ".$e;
        }
    }

    public function BuscaCliente($cli_id) {
        try {
                $p_sql = null;

                $sql   = "SELECT * FROM  tb_cliente WHERE cli_id = :cli_id";
                $p_sql = Conexao::getInstance()->prepare($sql);
                
                $p_sql->bindValue(":cli_id", $cli_id);

                $p_sql->execute();
               
                $rs = $p_sql->fetch(PDO::FETCH_OBJ);

                return $rs;
                
        } catch (Exception $e) {
            print "Erro: ".$e;
        }
    } 

    public function ExibeClientes() {
        try {
                $p_sql = null;
                $sql   = "SELECT *  FROM  tb_cliente";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->execute();
                
                $rs = $p_sql->fetchAll(PDO::FETCH_OBJ);
                
                return $rs;                

        } catch (Exception $e) {
            print "Erro: ".$e;
        }
    } 
 
}



?>