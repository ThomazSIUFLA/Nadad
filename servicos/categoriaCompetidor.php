<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string{
    if(validaNome($nome) && validaIdade($idade)){
        removerMensErro();
        if ($idade < 14){
            setMensagemSucesso("O atleta ".$nome." tem ".$idade." anos, e foi inscrito na categoria infantil!");
            return null;
        }else if ($idade < 18){
            setMensagemSucesso("O atleta ".$nome." tem ".$idade." anos, e foi inscrito na categoria adolescente!");
            return null;
        }else if ($idade < 50){
            setMensagemSucesso("O atleta ".$nome." tem ".$idade." anos, e foi inscrito na categoria adulto!");
            return null;
        }else{
            setMensagemSucesso("O atleta ".$nome." tem ".$idade." anos, e foi inscrito na categoria idoso!");
            return null;
        }
    }
    else{
        removerMensSucesso();
        //echo obterMensagemErro();
        return obterMensagemErro();
    }
}