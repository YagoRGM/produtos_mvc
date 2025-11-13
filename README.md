# Projeto MVC Produtos (PHP + PDO)

**Banco:** produtos_mvc (arquivo SQL: produtos_mvc.sql)

Estrutura básica do projeto (coloque a pasta `public` como root no seu servidor, ex: XAMPP htdocs):

- app/
  - controllers/ProdutoController.php
  - models/Produto.php
  - views/
    - layout/header.php
    - layout/footer.php
    - produtos/index.php
    - produtos/create.php
    - produtos/edit.php
- config/database.php
- public/index.php
- assets/css/style.css
- assets/js/main.js

Instruções rápidos:
1. Importe `produtos_mvc.sql` no phpMyAdmin.
2. Ajuste `config/database.php` com suas credenciais MySQL (host, usuário, senha).
3. Coloque todo o conteúdo na pasta do servidor (ex: htdocs/produtos_mvc_project) e aponte o DocumentRoot para `public/` ou abra `public/index.php` diretamente.
4. Acesse pelo navegador e teste: listar, criar, editar e excluir produtos.
