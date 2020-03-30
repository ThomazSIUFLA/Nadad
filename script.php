<?php
/**
 * Created by PhpStore.
 * User: thomaz
 */

session_start();
$nome = $_POST["nome"];
$idade = $_POST["idade"];

if(empty($nome) || empty($idade)){
    $_SESSION['mensagem-de-erro'] = "campos nome e idade não pode ser nulo, entre com os dados!";
    header('location: index.php');
    return;
}
else if(is_numeric($nome)){
    $_SESSION['mensagem-de-erro'] = "nome inválido!";
    header('location: index.php');
    return;
}
elseif(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = "digite uma idade válida!";
    header('location: index.php');
    return;
}

elseif(strlen($nome) <= 3 || strlen($nome) >= 40){
    $_SESSION['mensagem-de-erro'] = "nome deve conter entre 3 e 40 caracteres!";
    header('location: index.php');
    return;
}

else if($idade < 6 || $idade > 80){
    $_SESSION['mensagem-de-erro'] = "idade deve ser entre 6 e 80 anos";
    header('location: index.php');
}
if ($idade < 14){
    echo "O atleta ",$nome," tem ",$idade," anos, e foi inscrito na categoria infantil!";
    //header('location: index.php');
}elseif ($idade < 18){
    echo "O atleta ",$nome," tem ",$idade," anos, e foi inscrito na categoria adolescente!";
}elseif ($idade < 50){
    echo "O atleta ",$nome," tem ",$idade," anos, e foi inscrito na categoria adulto!";
}else{
    echo "O atleta ",$nome," tem ",$idade," anos, e foi inscrito na categoria idoso!";
}


