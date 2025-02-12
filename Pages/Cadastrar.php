<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../assets/css/Comun.css">
    <link rel="stylesheet" href="./../assets/css/Reset.css">
    <link rel="stylesheet" href="./../assets/css/Footer.css">
    <link rel="stylesheet" href="./../assets/css/Cadastrar.css">
</head>
<body>
    <main class="container cadastrar">
        <div class="icone-login">
            <img src="../assets/img/narguile.png" alt="" class="logo_narquile">
        </div>
        <div>
            <form action="" method="POST" class="form_login">
                <label for="mesa" class="lab_login">mesa</label>
                <input type="text" name="mesa" id="mesa" class="input_login">
                <label for="essencia" class="lab_login">essencia</label>
                <input type="text" name="essencia" id="essencia" class="input_login">
                <label for="narguile" class="lab_login">narguile</label>
                <input type="text" name="narguile" id="narguile" class="input_login">
                <input type="submit" value="salvar">
            </form>
        </div>
        <div>
        <?php 
            require_once("../Components/Footer/index.php");
        ?>
    </div>
    </main>
</body>
</html>

