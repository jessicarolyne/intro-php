<?php
    /*Declare faz com que respeite uma checagem de tipo mais rigida
    declare("strict_type = 1");*/
    function validaNome(string nome) : bool {
        if(empty($nome)){
            $_SESSION["mensagem-de-erro"] = "O nome não pode ser vazio, por favor preencha-o novamente!";
            return false;
        }
        else if(strlen($nome) < 3){
            $_SESSION["mensagem-de-erro"] = "O nome deve conter menos que 3 caracteres!";
            return false;;
        }
        else if(strlen($nome) > 40){
            $_SESSION["mensagem-de-erro"] = "O nome é muito extenso!";
            return false;;
        }
        return true;
    }
    function validaIdade(string idade) : bool{
        //Como o input é do tipo number, então a variavel $idade sempre vai ser um número
        if(!is_numeric($idade)){
            $_SESSION["mensagem-de-erro"] = "Informe um número para idade!";
            return false;;
        }
        return true;
    }
?>