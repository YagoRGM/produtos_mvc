<?php
// header.php
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos MVC</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <header class="top">
        <div class="container">
            <h1>Aplicação MVC</h1>
            <a class="btn" href="index.php?a=create">
                <i data-lucide="plus"></i> Novo Produto
            </a>

            <script>
                lucide.createIcons();
            </script>

        </div>
    </header>
    <main class="container">
        <?php
        // flash usando SweetAlert
        if (!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({icon: '" . ($flash['type'] == 'success' ? 'success' : 'info') . "', title: '" . addslashes($flash['message']) . "', timer: 1800, showConfirmButton: false});
                });
            </script>";
            unset($_SESSION['flash']);
        }
        ?>