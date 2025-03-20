<?php
require_once('../../controllers/clientesController.php');

$clientesController = new ClientesController();
$clientes = $clientesController->pegarTodosClientes();
?>

<?php include('../../views/components/header.php') ?>

<section id="section">

    <div id="div-lista">
        <h2>Clientes</h2>

        <div id="searchAdd">
            <input id="search-bar" placeholder="Digite seu cliente...">
            <a href="../../views/admin/addCliente.php"><button class="btn add-button">+ ADICIONAR<button></a>
        </div>

        <table id="listas">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Número Matricula</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= htmlspecialchars($cliente['nome']) ?></td>
                    <td><?= htmlspecialchars($cliente['email']) ?></td>
                    <td><?= htmlspecialchars($cliente['telefone']) ?></td>
                    <td><?= htmlspecialchars($cliente['numero_matricula']) ?></td>
                    <td>
                        <a href="../../views/admin/alterarCliente.php"><button class="btn edit-btn" value="<?php echo $cliente['id']; ?>">ALTERAR</button></a>

                        <form action="../../controllers/actions/delete.php" method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>" />
                                <button type="submit" class="btn delete-btn" onclick="return confirm('Você tem certeza que deseja excluir este cliente?')">EXCLUIR</button>
                                </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</section>
