<?php

declare(strict_types=1);
function validaNome(string $nome) : bool{
    if(empty($nome)){
        setMensagemErro ("nome não pode ser vazio, entre com os dados!");
        header('location: index.php');
        return false;
    }
    if(strlen($nome) < 3 || strlen($nome) > 40){
        setMensagemErro ( "nome deve conter entre 3 e 40 caracteres!");
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool{
    if(!is_numeric($idade)) {
        setMensagemErro ( "digite uma idade válida!");
        return false;
    }
    if($idade < 6 || $idade > 80){
        setMensagemErro ( "idade deve ser entre 6 e 80 anos");
        return false;
    }
    if(empty($idade)){
        setMensagemErro ( "idade não pode ser vazia!");
        return false;
    }
    return true;
}

