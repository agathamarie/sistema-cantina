<?php
require_once('../../controllers/produtosController.php');

$produtosController = new ProdutosController();
$produtos = $produtosController->pegarTodosProdutos();
?>

<?php include('../../views/components/header.php') ?>

<section id="section">

    <div id="div-lista">
        <h2>Produtos</h2>

        <div id="searchAdd">
            <input id="search-bar" placeholder="Digite seu produto...">
            <a href="../../views/admin/addProduto.php"><button class="btn add-button">+ ADICIONAR<button></a>
        </div>

        <table id="listas">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Informações Nutricionais</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= htmlspecialchars($produto['nome']) ?></td>
                    <td><?= htmlspecialchars($produto['preco']) ?></td>
                    <td><?= htmlspecialchars($produto['categoria']) ?></td>
                    <td><?= htmlspecialchars($produto['descricao']) ?></td>
                    <td><?= htmlspecialchars($produto['informacoes_nutricionais']) ?></td>
                    <td>
                        <a href="../../views/admin/alterarProduto.php"><button class="btn edit-btn" value="<?php echo $produto['id']; ?>">ALTERAR</button></a>

                        <form action="../../controllers/actions/delete.php" method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $produto['id']; ?>" />
                                <button type="submit" class="btn delete-btn" onclick="return confirm('Você tem certeza que deseja excluir este produto?')">EXCLUIR</button>
                                </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</section>
