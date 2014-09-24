<?php

class Usuario {

    private $userName;

    function __construct($userName) {
        $this->setUserName($userName);
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getConquista() {
        return $this->conquista;
    }

    public function getAmigos() {
        return $this->amigos;
    }

    public function getPublicacoes() {
        return $this->publicacoes;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setConquista($conquista) {
        $this->conquista = $conquista;
    }

    public function setAmigos($amigos) {
        $this->amigos = $amigos;
    }

    public function setPublicacoes($publicacoes) {
        $this->publicacoes = $publicacoes;
    }

}
