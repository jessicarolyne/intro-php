<?php
    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';
    //print_r($categorias)

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    //var_dump($nome);
    // var_dump($idade);
    if(empty($nome) || empty($idade)){
        echo "O nome e a idade não podem ser vazios!";
    }
    if(strlen($nome) < 3){
        echo "Onome deve conter mais que 3 caracteres!";
    }
    if(strlen($nome) > 40){
        echo "O nome é muito extenso!";
    }
    if(!is_numeric($idade)){
        echo"Informe um número para idade!";
    }
    // if($idade >= 6 && $idade < 12){
    //     for($i = 0; $i <= count($categorias); $i++){
    //         if($categorias[$i] == 'Infantil')
    //             echo("O nadador $nome compete na categoria $categorias[$i]");
    //     }
    // }else if($idade >=12 && $idade < 18){
    //     for($i = 0; $i <= count($categorias); $i++){
    //         if($categorias[$i] == 'Adolescente')
    //             echo("O nadador $nome compete na categoria $categorias[$i]");
    //     }
    // } else if($idade >= 18){
    //     for($i = 0; $i <= count($categorias); $i++){
    //         if($categorias[$i] == 'Adulto')
    //             echo("O nadador $nome compete na categoria $categorias[$i]"); 
    //     }
    // }
?>