<div class="container">
    <h1 class="titulo-principal">Efetuar Login</h1>
    <form method="POST">
        <div class="form-group">
            <label for="codigoUsuario">Login</label>
            <input type="text" class="form-control" id="codigoUsuario" placeholder="Informe seu código de usuário" name="codigoUsuario" required maxlength="7">
        </div>
        <div class="form-group">
            <label for="senhaUsuario">Senha</label>
            <input type="password" class="form-control" id="senhaUsuario" placeholder="***********" name="senhaUsuario" required maxlength="11">
        </div>
        <button type="submit" class="btn btn-primary" name="logar" value="logar">Entrar</button>
    </form>
</div>