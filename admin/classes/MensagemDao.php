<?php

class MensagemDao extends Db implements InterfaceDao {

    private $table = 'mensagem';

    public function insert($mensagem) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (nome, telefone, email, assunto, texto) VALUES (:nome, :telefone, :email, :assunto, :texto)");

        $stmt->bindValue(':nome', $mensagem->getNome());
        $stmt->bindValue(':telefone', $mensagem->getTelefone());
        $stmt->bindValue(':email', $mensagem->getEmail());
        $stmt->bindValue(':assunto', $mensagem->getAssunto());
        $stmt->bindValue(':texto', $mensagem->getTexto());

        return $stmt->execute();
    }
    
    public function update($mensagem) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET nome=:nome, telefone=:telefone, email=:email assunto=:assunto, texto=:texto WHERE id = :id;");

        $stmt->bindValue(':id', $mensagem->getId());
        $stmt->bindValue(':nome', $mensagem->getNome());
        $stmt->bindValue(':telefone', $mensagem->getTelefone());
        $stmt->bindValue(':email', $mensagem->getEmail());
        $stmt->bindValue(':assunto', $mensagem->getAssunto());
        $stmt->bindValue(':texto', $mensagem->getTexto());

        return $stmt->execute();
    }    

    public function delete($mensagem) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $mensagem->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $mensagens = array();

        while ($linha = $stmt->fetch()) {
            $mensagem = new Mensagem();
            $mensagem->setNome($linha['nome']);
            $mensagem->setTelefone($linha['telefone']);
            $mensagem->setEmail($linha['email']);
            $mensagem->setAssunto($linha['assunto']);
            $mensagem->setTexto($linha['texto']);
            $mensagem->setId($linha['id']);

            $mensagens[] = $mensagem;
        }
        return $mensagens;
    }

    public function selectById($mensagem) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $mensagem->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $mensagem = new Mensagem();
        $mensagem->setNome($linha['nome']);
        $mensagem->setSenha($linha['telefone']);
        $mensagem->setEmail($linha['email']);
        $mensagem->setSenha($linha['assunto']);
        $mensagem->setEmail($linha['texto']);
        $mensagem->setId($linha['id']);
        
        return $mensagem;
    }
}
