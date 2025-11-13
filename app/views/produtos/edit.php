<section class="card">
    <h2>Editar Produto</h2>
    <?php if (!$produto): ?>
        <p class="muted">Produto não encontrado.</p>
    <?php else: ?>
    <form action="index.php?a=update" method="post" class="form">
        <input type="hidden" name="id" value="<?= $produto['id'] ?>">
        <label>Nome
            <input type="text" name="nome" required maxlength="100" value="<?= htmlspecialchars($produto['nome']) ?>">
        </label>
        <label>Preço (ex: 19.90)
            <input type="number" step="0.01" name="preco" required value="<?= htmlspecialchars($produto['preco']) ?>">
        </label>
        <label>Categoria
            <input type="text" name="categoria" required maxlength="50" value="<?= htmlspecialchars($produto['categoria']) ?>">
        </label>
        <div class="actions">
            <button class="btn" type="submit">Atualizar</button>
            <a class="btn ghost" href="index.php">Cancelar</a>
        </div>
    </form>
    <?php endif; ?>
</section>
