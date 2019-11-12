<?php

class Mensagem {
    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $assunto;
    private $texto;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getAssunto() {
        return $this->assunto;
    }

    function getTexto() {
        return $this->texto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }

}