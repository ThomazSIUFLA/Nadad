<?php
/**
 * Created by PhpStore.
 * User: thomaz
 */

include "servicos/mensagemSessao.php";
include "servicos/categoriaCompetidor.php";
include "servicos/validacao.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];
defineCategoriaCompetidor($nome,$idade);

header('location: index.php');


