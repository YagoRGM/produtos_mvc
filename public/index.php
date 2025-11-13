<?php
// public/index.php - Front Controller
session_start();
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/models/Produto.php';
require_once __DIR__ . '/../app/controllers/ProdutoController.php';

$controller = isset($_GET['c']) ? $_GET['c'] : 'produto';
$action = isset($_GET['a']) ? $_GET['a'] : 'index';

// only 'produto' controller exists in this mini projeto
$db = new Database();
$produtoModel = new Produto($db->pdo);
$controllerObj = new ProdutoController($produtoModel);

// map action to controller method (basic)
if (!method_exists($controllerObj, $action)) {
    $action = 'index';
}

// call action
$controllerObj->{$action}();
