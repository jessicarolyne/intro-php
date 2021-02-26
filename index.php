<?php
    include "servicos/servico-mensagem-sessao.php";
    include "servicos/servico-validacao.php";
    include "servicos/servicoCategoriaCompetidor.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
</head>
<body>
    <form action="script.php" method="post">
        <h1>Formulário para inscrição de competidores</h1>
        <p><label for="nome">Seu nome:</label>
        <input type="text" name="nome"></p>
        <p><label for="idade">Seu nome:</label>
        <input type="number" name="idade"></p>
        <?php
            $mensagemdeSucesso = obterMensagemSucesso();
            if(!empty($mensagemdeSucesso)){
                echo "<p style='color:green;'>$mensagemdeSucesso</p>";
            }

            $mensagemdeErro = obterMensagemErro();
            if(!empty($mensagemdeErro)){
                echo "<p style='color:red;'>$mensagemdeErro</p>";
            }
        ?>
        <p><input type="submit" value="Cadastrar"></p>
    </form>
</body>
</html>