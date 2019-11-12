<?php

class Curriculo {
    private $id;
    private $empresa;
    private $local;
    private $funcao;
    private $periodo;
    
    function getId() {
        return $this->id;
    }

    function getEmpresa() {
        return $this->empresa;
    }

    function getLocal() {
        return $this->local;
    }

    function getFuncao() {
        return $this->funcao;
    }

    function getPeriodo() {
        return $this->periodo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    function setLocal($local) {
        $this->local = $local;
    }

    function setFuncao($funcao) {
        $this->funcao = $funcao;
    }

    function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

}