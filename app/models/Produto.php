<?php
// app/models/Produto.php
class Produto {
    private $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function all() {
        $stmt = $this->pdo->query('SELECT * FROM produtos ORDER BY id DESC');
        return $stmt->fetchAll();
    }

    public function find($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM produtos WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($data) {
        $stmt = $this->pdo->prepare('INSERT INTO produtos (nome, preco, categoria) VALUES (?, ?, ?)');
        return $stmt->execute([$data['nome'], $data['preco'], $data['categoria']]);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare('UPDATE produtos SET nome = ?, preco = ?, categoria = ? WHERE id = ?');
        return $stmt->execute([$data['nome'], $data['preco'], $data['categoria'], $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM produtos WHERE id = ?');
        return $stmt->execute([$id]);
    }
}
