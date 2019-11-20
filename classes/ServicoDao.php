<?php

class ServicoDao extends Db implements InterfaceDao {

    private $table = 'servico';

    public function insert($servico) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} "
        . " (titulo, subtitulo, descricao, imagem) "
        . " VALUES (:titulo, :subtitulo, :descricao, :imagem)");

        $stmt->bindValue(':titulo', $servico->getTitulo());
        $stmt->bindValue(':subtitulo', $servico->getSubtitulo());        
        $stmt->bindValue(':descricao', $servico->getDescricao());
        $stmt->bindValue(':imagem', $servico->getImagem());

        return $stmt->execute();
    }

    public function update($servico) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET titulo=:titulo, subtitulo=:subtitulo, descricao=:descricao WHERE id = :id;");

        $stmt->bindValue(':id', $servico->getId());
        $stmt->bindValue(':titulo', $servico->getTitulo());
        $stmt->bindValue(':subtitulo', $servico->getSubtitulo());
        $stmt->bindValue(':descricao', $servico->getDescricao());

        return $stmt->execute();
    }    

    public function updateimg($servico) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET imagem=:imagem, WHERE id = :id;");

        $stmt->bindValue(':id', $servico->getId());
        $stmt->bindValue(':imagem', $servico->getImagem());

        return $stmt->execute();
    }    


    public function delete($servico) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $servico->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $servicos = array();

        while ($linha = $stmt->fetch()) {
            $servico = new Servico();
            $servico->setTitulo($linha['titulo']);
            $servico->setSubtitulo($linha['subtitulo']);
            $servico->setDescricao($linha['descricao']);
            $servico->setImagem($linha['imagem']);
            $servico->setId($linha['id']);

            $servicos[] = $servico;
        }
        return $servicos;
    }

    public function selectById($servico) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $servico->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $servico = new Servico();
        $servico->setTitulo($linha['titulo']);
        $servico->setSubtitulo($linha['subtitulo']);
        $servico->setDescricao($linha['descricao']);
        $servico->setImagem($linha['imagem']);
        $servico->setId($linha['id']);
        
        return $servico;
    }
}
