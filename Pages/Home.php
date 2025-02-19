<?php
    session_start();
    $usuario = "";
    
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
    } else {
        $usuario = "";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="./../assets/css/Body.css">
    <link rel="stylesheet" href="./../assets/css/Comun.css">
</head>
<body>
    <div class="d-flex">
        <?php 
            require_once __DIR__ . '/../Components/Header/index.php'; 
        ?>
        <main>
            <div>
                <div class="imagem-principal">
                    <img
                        src="../assets/img/narguiles-principal.jpg"
                        alt="imagem-narguile-principal"
                    >
                </div>
                <div class="texto-principal">
                    <p class="texto-usuario">Olá prazer, <?= $usuario['login']; ?></p>
                    
                    <div class="botoes-principal">
                        <a href="Cadastrar.php" class="btn">Cadastrar</a>
                        <a href="Relatorio.php" class="btn">Relatorio</a>
                    </div>
                </div>
            </div>
        </main>
        <?php
            require_once __DIR__ . "/../Components/Footer/index.php";
        ?>
    </div>
</body>
</html>