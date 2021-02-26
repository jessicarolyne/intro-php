<?php
    function defineCategoriaCompetidor(string $nome, string $idade) : ?string{
        $categorias = [];
        $categorias[] = 'Infantil';
        $categorias[] = 'Adolescente';
        $categorias[] = 'Adulto';
        if(validaNome($nome) && validaIdade($idade)) {
            removerMensagemErro();
            if($idade >= 6 && $idade < 12){
                for($i = 0; $i <= count($categorias); $i++){
                    if($categorias[$i] == 'Infantil'){
                        setarMensagemSucesso( mensagem: "O/A nadador/nadadora $nome compete na categoria $categorias[$i]");
                        return null;
                    }
                }
            }
            else if($idade >=12 && $idade < 18){
                for($i = 0; $i <= count($categorias); $i++){
                    if($categorias[$i] == 'Adolescente'){
                        setarMensagemSucesso( mensagem: "O/A nadador/nadadora $nome compete na categoria $categorias[$i]");
                        return null;
                    }
                }
            } 
            else if($idade >= 18){
                for($i = 0; $i <= count($categorias); $i++){
                    if($categorias[$i] == 'Adulto'){
                        setarMensagemSucesso( mensagem: "O/A nadador/nadadora $nome compete na categoria $categorias[$i]"); 
                        return null;
                    }
                }
            }
        }
        else{
            removerMensagemSucesso();
            return obterMensagemErro();
        }
    }
?>