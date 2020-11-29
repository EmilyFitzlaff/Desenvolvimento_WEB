<?php
    $title = "Login";

    include_once('class/class_connection.php');
    include_once('config/functions.php');
    include_once('layout/header.php');

    $_SESSION['usuariologado'] = false;
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">Northwind</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<br>
<div class="container"> 
    <div class="card">
        <div class="card-header">
            <strong>LOGIN</strong>
        </div>
        <div class="card-body">
            <form method="POST" action="autenticacao.php">
                <div class="form-group">
                    <label for="login">Código de Login</label>
                    <input type="number" class="form-control" id="login" placeholder="Informe seu login" name="login" required maxlength="15">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="*********" name="senha" required>
                </div>
                <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                    <div class="text-danger">
                        Usuário ou senha inválido(s)!
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary" value="entrar" name="acao">Entrar</button>
            </form>
        </div>
    </div>
</div>