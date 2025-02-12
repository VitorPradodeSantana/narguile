<?php

    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['usuario']) && isset($_POST['senha'])) {
            $_SESSION['usuario'] = [
                "login" => $_POST['usuario'],
                "senha" => $_POST['senha'],
            ];
        }
    }
    header('Location: ./Home.php');
    exit;
?>