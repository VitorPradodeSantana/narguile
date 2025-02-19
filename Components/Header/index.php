<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/Header.css">
    <link rel="stylesheet" href="../assets/css/Reset.css">
    <link rel="stylesheet" href="../assets/css/Comun.css">
    <link rel="stylesheet" href="../assets/css/Relatorio.css">
    <link rel="stylesheet" href="./../assets/css/Cadastrar.css">
</head>
<body>
    <header class="container">
        <ul class="lista-header">
            <li>
                <a href="./Home.php">
                    <img 
                        src="../assets/img/narguile.png"
                        alt="icone-narguile-header"
                        class="icone-header"
                    >
                </a>
            </li>
            <li>
                <div class="menu-toogle" id="menu-toggle">
                    <img 
                        src="../assets/img/hamburger.png"
                        alt="icone-hamburguer"
                        class="icone-header"
                    >
                </div>
                <nav class="nav" id="nav">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Cadastrar</a></li>
                        <li><a href="#">Relatorio</a></li>
                    </ul>
                </nav>
            </li>
        </ul>
    </header>
</body>
</html>
<script>
    menuToggle = document.getElementById("menu-toggle");
    nav = document.getElementById('nav');

    menuToggle.addEventListener("click", () => {
        nav.classList.toggle("show");
    });
</script>