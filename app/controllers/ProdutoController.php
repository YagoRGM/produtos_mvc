<?php
// app/controllers/ProdutoController.php
class ProdutoController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $produtos = $this->model->all();
        require __DIR__ . '/../views/layout/header.php';
        require __DIR__ . '/../views/produtos/index.php';
        require __DIR__ . '/../views/layout/footer.php';
    }

    public function create() {
        require __DIR__ . '/../views/layout/header.php';
        require __DIR__ . '/../views/produtos/create.php';
        require __DIR__ . '/../views/layout/footer.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nome' => trim($_POST['nome'] ?? ''),
                'preco' => trim($_POST['preco'] ?? '0'),
                'categoria' => trim($_POST['categoria'] ?? ''),
            ];
            $this->model->create($data);
            $_SESSION['flash'] = ['type'=>'success','message'=>'Produto cadastrado com sucesso!'];
        }
        header('Location: index.php');
    }

    public function edit() {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: index.php');
            exit;
        }
        $produto = $this->model->find($id);
        require __DIR__ . '/../views/layout/header.php';
        require __DIR__ . '/../views/produtos/edit.php';
        require __DIR__ . '/../views/layout/footer.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            if ($id) {
                $data = [
                    'nome' => trim($_POST['nome'] ?? ''),
                    'preco' => trim($_POST['preco'] ?? '0'),
                    'categoria' => trim($_POST['categoria'] ?? ''),
                ];
                $this->model->update($id, $data);
                $_SESSION['flash'] = ['type'=>'success','message'=>'Produto atualizado com sucesso!'];
            }
        }
        header('Location: index.php');
    }

    public function delete() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->model->delete($id);
            $_SESSION['flash'] = ['type'=>'success','message'=>'Produto removido com sucesso!'];
        }
        header('Location: index.php');
    }
}
