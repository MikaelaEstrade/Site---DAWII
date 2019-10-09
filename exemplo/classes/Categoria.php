<?php

class Categoria {
    private $id;
    private $categoria;
    private $descricao;
    
    function getId() {
        return $this->id;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}