<?php
namespace App\Model;

class ProdutoDao {

    public function create(Produto $p) {
        $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?, ?)';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->execute();
    }

    public function read() {
        $sql = 'SELECT * FROM produtos';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0) {
            $res = $stmt->fetchALL(\PDO::FETCH_ASSOC);
            return $res;
        }
    }

    public function update(Produto $p) {

    }

    public function delete($id) {
        
    }
}