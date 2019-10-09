<?php

class CategoriaDao extends Db implements InterfaceDao {

    private $table = 'categoria';

    public function insert($categoria) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (categoria, descricao) VALUES (:categoria, :descricao)");

        $stmt->bindValue(':categoria', $categoria->getNome());
        $stmt->bindValue(':descricao', $categoria->getSenha());

        return $stmt->execute();
    }
    
    public function update($categoria) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET categoria=:categoria, descricao = :descricao WHERE id = :id;");

        $stmt->bindValue(':id', $categoria->getId());
        $stmt->bindValue(':categoria', $categoria->getNome());
        $stmt->bindValue(':descricao', $categoria->getSenha());
        $stmt->bindValue(':email', $categoria->getEmail());

        return $stmt->execute();
    }    

    public function delete($categoria) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $categoria->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $categorias = array();

        while ($linha = $stmt->fetch()) {
            $categoria = new Categoria();
            $categoria->setNome($linha['categoria']);
            $categoria->setSenha($linha['descricao']);
            $categoria->setId($linha['id']);

            $categorias[] = $categoria;
        }
        return $categorias;
    }

    public function selectById($categoria) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $categoria->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $categoria->setNome($linha['categoria']);
        $categoria->setSenha($linha['descricao']);
        $categoria->setId($linha['id']);
        
        return $categoria;
    }
}
