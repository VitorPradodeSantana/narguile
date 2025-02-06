<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/Reset.css">
    <link rel="stylesheet" href="./assets/css/Comun.css">
</head>
<body>
    <main class="container">
        <div class="icone-header">
            <img 
                src="./assets/img/narguile.png"
                alt="icone-narguile"
            >
        </div>
        <form action="" method="POST">
            <label for="usuario">Usuario</label>    
            <input type="text" name="usuario" minlength="3">
            <label for="senha">Senha</label>
            <input type="senha" minlength="3">
            <input type="submit" value="entrar">
        </form>
    </main>
</body>
</html>