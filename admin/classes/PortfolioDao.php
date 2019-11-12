<?php

class PortfolioDao extends Db implements InterfaceDao {

    private $table = 'portfolio';

    public function insert($portfolio) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (src, descricao) VALUES (:src, :descricao)");

        $stmt->bindValue(':src', $portfolio->getSrc());
        $stmt->bindValue(':descricao', $portfolio->getDescricao());

        return $stmt->execute();
    }
    
    public function update($portfolio) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET src=:src, descricao = :descricao WHERE id = :id;");

        $stmt->bindValue(':id', $portfolio->getId());
        $stmt->bindValue(':src', $portfolio->getSrc());
        $stmt->bindValue(':descricao', $portfolio->getDescricao());

        return $stmt->execute();
    }    

    public function delete($portfolio) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $portfolio->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $portfolios = array();

        while ($linha = $stmt->fetch()) {
            $portfolio = new Portfolio();
            $portfolio->setSrc($linha['src']);
            $portfolio->setDescricao($linha['descricao']);
            $portfolio->setId($linha['id']);

            $portfolios[] = $portfolio;
        }
        return $portfolios;
    }

    public function selectById($portfolio) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $portfolio->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $portfolio = new Portfolio();
        $portfolio->setSrc($linha['src']);
        $portfolio->setDescricao($linha['descricao']);
        $portfolio->setId($linha['id']);
        
        return $portfolio;
    }
}
