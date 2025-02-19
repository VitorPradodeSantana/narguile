<div class="d-flex">
    <?php
        require_once("../Components/Header/index.php");
    ?>
    <main class="container" style="height: 60vh;">
        <form action="" method="POST" class="form_login">
            <label for="mesa" class="lab_login">nome do usuario</label>
            <input type="text" name="mesa" id="mesa" class="input_login">
            <label for="essencia" class="lab_login">senha</label>
            <input type="text" name="essencia" id="essencia" class="input_login">
            <label for="narguile" class="lab_login">senha</label>
            <input type="text" name="narguile" id="narguile" class="input_login">
            <input type="submit" value="salvar" class="botao">
        </form>
    </main>
    <?php
        require_once("../Components/Footer/index.php");
    ?>
</div>
