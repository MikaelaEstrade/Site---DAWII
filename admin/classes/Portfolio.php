<?php

class Portfolio {
    private $id;
    private $src;
    private $descricao;
    
    function getId() {
        return $this->id;
    }

    function getSrc() {
        return $this->src;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSrc($src) {
        $this->src = $src;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}