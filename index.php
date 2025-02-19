<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/Reset.css">
    <link rel="stylesheet" href="./assets/css/Comun.css">
    <link rel="stylesheet" href="./assets/css/Login.css">
    <link rel="stylesheet" href="./assets/css/Footer.css">
</head>
<body>
    <main class="container">
        <div>
        </div>
        <div>    
            <div class="icone-login">
                <img 
                    src="./assets/img/narguile.png"
                    alt="icone-narguile"
                    class="logo_narquile"
                >
            </div>        
            <form 
                action="./pages/Login.php" 
                method="POST" 
                class="form_login"
            >
                <label
                    for="usuario"
                    class="lab_login"
                >
                    Usuario
                </label>    
                <input
                    type="text"
                    name="usuario"
                    minlength="3"
                    class="input_login"
                >
                <label
                    for="senha"
                    class="lab_login"
                >
                    Senha
                </label>
                <input 
                    type="senha" 
                    name="senha"
                    minlength="3" 
                    class="input_login"
                >
                <input
                    type="submit"
                    value="entrar"
                    class="botao"
                >
            </form>
        </div>
        <?php require_once("./Components/Footer/index.php"); ?>
    </main>
</body>
</html>