<style>
    .botoes-cadastro {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
</style>

<div class="d-flex">
    <?php
        require_once("../Components/Header/index.php");
    ?>
    <main>
        <div class="botoes-cadastro">
            <a href="./CadUsuario.php" class="botao">
                Cadastrar Usuário
            </a>
            <a href="./CadNarguile.php" class="botao">
                Cadastrar Narguile
            </a>
        </div>
    </main>
    <?php
        require_once("../Components/Footer/index.php");
    ?>
</div>