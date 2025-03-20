<?php include('../../views/components/header.php') ?>

<section id="section">

    <div id="div-form">
        <form action="../../controllers/actions/add.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" name="nome" required>
            
            <label for="categoria">Categoria</label>
            <select name="categoria" required>
                <option value="">-- selecione a categoria --</option>
                <option value="bebidas">Bebidas</option>
                <option value="doces">Doces</option>
                <option value="salgados">Salgados</option>
                <option value="salgadinhos">Salgadinhos</option>
                <option value="lanches">Lanches</option>
                <option value="outros">Outros</option>
            </select>
            
            <label for="preco">Preço</label>
            <input type="number" name="preco" required>
            
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" required>
            
            <label for="informacoes_nutricionais">Informações Nutricionais</label>
            <input type="text" name="informacoes_nutricionais" required>

            <input type="submit" id="criar-btn" value="CRIAR">
        </form>
    </div>

</section>