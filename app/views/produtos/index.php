<section class="card">
    <h2>Lista de Produtos</h2>
    <?php if (count($produtos) === 0): ?>
        <p class="muted">Nenhum produto cadastrado. Clique em "+ Novo Produto" para adicionar.</p>
    <?php else: ?>
        <table class="table">
            <thead>
                <tr><th>ID</th><th>Nome</th><th>Preço (R$)</th><th>Categoria</th><th>Ações</th></tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $p): ?>
                <tr>
                    <td><?= htmlspecialchars($p['id']) ?></td>
                    <td><?= htmlspecialchars($p['nome']) ?></td>
                    <td><?= number_format($p['preco'], 2, ',', '.') ?></td>
                    <td><?= htmlspecialchars($p['categoria']) ?></td>
                    <td class="acoes">
                        <a class="btn small" href="index.php?a=edit&id=<?= $p['id'] ?>">Editar</a>
                        <button class="btn small danger" onclick="confirmDelete(<?= $p['id'] ?>)">Excluir</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</section>
