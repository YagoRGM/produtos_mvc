<section class="card">
    <h2>Novo Produto</h2>
    <form action="index.php?a=store" method="post" class="form">
        <label>Nome
            <input type="text" name="nome" required maxlength="100">
        </label>
        <label>Preço (ex: 19.90)
            <input type="number" step="0.01" name="preco" required>
        </label>
        <label>Categoria
            <input type="text" name="categoria" required maxlength="50">
        </label>
        <div class="actions">
            <button class="btn" type="submit">Salvar</button>
            <a class="btn ghost" href="index.php">Cancelar</a>
        </div>
    </form>
</section>
