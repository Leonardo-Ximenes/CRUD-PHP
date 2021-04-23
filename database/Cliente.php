<?php

class Cliente {

    private $cli_id;
    private $cli_nome;
    private $cli_cpf;
    private $cli_email;
    private $cli_telefone;
    private $cli_cep;
    private $cli_endereco;
    private $cli_numero;
    private $cli_complemento;
    private $cli_cidade;
    private $cli_estado;

    public function getCliId() {
        return $this->cli_id;
    }

    public function setCliId($cli_id) {
        $this->cli_id = $cli_id;
    }

    public function getCliNome() {
        return $this->cli_nome;
    }

    public function setCliNome($cli_nome) {
        $this->cli_nome = $cli_nome;
    }

    public function getCliCpf() {
        return $this->cli_cpf;
    }

    public function setCliCpf($cli_cpf) {
        $this->cli_cpf = $cli_cpf;
    }

    public function getEmail() {
        return $this->cli_email;
    }

    public function setEmail($cli_email) {
        $this->cli_email = strtolower($cli_email);
    }

    public function getTelefone() {
        return $this->cli_telefone;
    }

    public function setTelefone($cli_telefone) {
        $this->cli_telefone = strtolower($cli_telefone);
    }

    public function getCep() {
        return $this->cli_cep;
    }

    public function setCep($cli_cep) {
        $this->cli_cep = strtolower($cli_cep);
    }

    public function getEndereco() {
        return $this->cli_endereco;
    }

    public function setEndereco($cli_endereco) {
        $this->cli_endereco = strtolower($cli_endereco);
    }

    public function getNumero() {
        return $this->cli_numero;
    }

    public function setNumero($cli_numero) {
        $this->cli_numero = $cli_numero;
    }

    public function getComplemento() {
        return $this->cli_complemento;
    }

    public function setComplemento($cli_complemento) {
        $this->cli_complemento = strtolower($cli_complemento);
    }

    public function getCidade() {
        return $this->cli_cidade;
    }

    public function setCidade($cli_cidade) {
        $this->cli_cidade = strtolower($cli_cidade);
    }

    public function getEstado() {
        return $this->cli_estado;
    }

    public function setEstado($cli_estado) {
        $this->cli_estado = strtoupper($cli_estado);
    }













    public function getAtivo() {
        return $this->ativo;
    }

    public function setAtivo($ativo) {
        $this->ativo = strtolower($ativo);
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

}

?>
