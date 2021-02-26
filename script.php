<?php
    include "servicos/servico-mensagem-sessao.php";
    include "servicos/servico-validacao.php";
    include "servicos/servicoCategoriaCompetidor.php";

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    defineCategoriaCompetidor($nome, $idade);

    header('Location:index.php');
?>