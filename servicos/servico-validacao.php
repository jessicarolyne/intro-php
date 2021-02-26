<?php
    /*Declare faz com que respeite uma checagem de tipo mais rigida
    declare("strict_type = 1");*/
    function validaNome(string $nome) : bool {
        if(empty($nome)){
            setarMensagemErro(mensagem: 'O nome não pode ser vazio, por favor preencha-o novamente!');
            return false;  
        }
        else if(strlen($nome) < 3){
            setarMensagemErro(mensagem: 'O nome deve conter menos que 3 caracteres!');
            return false;
        }
        else if(strlen($nome) > 40){
            setarMensagemErro(mensagem: 'O nome é muito extenso!');
            return false;
        }
        return true;
    }
    function validaIdade(string $idade) : bool{
        //Como o input é do tipo number, então a variavel $idade sempre vai ser um número
        if(!is_numeric($idade)){
            setarMensagemErro(mensagem: 'Informe um número para idade!');
            return false;
        }
        return true;
    }
?>