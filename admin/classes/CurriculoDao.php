<?php

class CurriculoDao extends Db implements InterfaceDao {

    private $table = 'curriculo';

    public function insert($curriculo) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (empresa, local, funcao, periodo) VALUES (:empresa, :local, :funcao, :periodo)");

        $stmt->bindValue(':empresa', $curriculo->getEmpresa());
        $stmt->bindValue(':local', $curriculo->getLocal());
        $stmt->bindValue(':funcao', $curriculo->getFuncao());
        $stmt->bindValue(':periodo', $curriculo->getPeriodo());

        return $stmt->execute();
    }
    
    public function update($curriculo) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET empresa=:empresa, local = :local, funcao = :funcao, periodo = :periodo WHERE id = :id;");

        $stmt->bindValue(':id', $curriculo->getId());
        $stmt->bindValue(':empresa', $curriculo->getEmpresa());
        $stmt->bindValue(':local', $curriculo->getLocal());
        $stmt->bindValue(':funcao', $curriculo->getFuncao());
        $stmt->bindValue(':periodo', $curriculo->getPeriodo());

        return $stmt->execute();
    }    

    public function delete($curriculo) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $curriculo->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $curriculos = array();

        while ($linha = $stmt->fetch()) {
            $curriculo = new Curriculo();
            $curriculo->setEmpresa($linha['empresa']);
            $curriculo->setLocal($linha['local']);
            $curriculo->setFuncao($linha['funcao']);
            $curriculo->setPeriodo($linha['periodo']);

            $curriculos[] = $curriculo;
        }
        return $curriculos;
    }

    public function selectById($curriculo) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $curriculo->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $curriculo = new Curriculo();
        $curriculo->setEmpresa($linha['empresa']);
        $curriculo->setLocal($linha['local']);
        $curriculo->setFuncao($linha['funcao']);
        $curriculo->setPeriodo($linha['periodo']);
        $curriculo->setId($linha['id']);
        
        return $curriculo;
    }
}