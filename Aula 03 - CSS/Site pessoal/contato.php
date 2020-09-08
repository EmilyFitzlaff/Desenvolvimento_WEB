<!DOCTYPE html>
<?php $title = "Contato"; ?>

    <head>
        <?php include_once('head.php'); ?>
    </head>

    <body>
        <?php include_once('header.php'); ?>
        <main>
            <form>
                <fieldset class="center">
                    <legend>Contato</legend>
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" placeholder="Informe seu nome completo" required>

                    <label for="email">E-mail</label>
                    <input type="mail" id="email" placeholder="usuario@mail.com" required>

                    <label for="assunto">Escolha o assunto</label>
                    <select>
                        <option value="NI" disabled selected class="disabled">Não informado</option>
                        <option value="sugestao">Sugestão</option>
                        <option value="elogia">Elogio</option>
                        <option value="reclamacao">Reclamação</option>
                    </select>

                    <label for="msg">Mensagem</label>
                    <textarea id="msg" name="msg" rows="4" cols="50"></textarea>
                </fiedlset> 

                <button class="enviar">Enviar</button>
            </form>       
        </main>
        <?php include_once('footer.php'); ?>
    </body>
</html>
