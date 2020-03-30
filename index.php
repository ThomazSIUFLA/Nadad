<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FORMULÁRIO DE INSCRIÇÃO</title>
    <meta name="Thomaz" content="">
    <meta name="Description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
<form action="script.php" method="post">
    <?php
        $mensErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
        if(!empty($mensErro)){
            echo $mensErro;
        }
    ?>
    <p>seu nome:<input type="text" name="nome"></p>
    <p>sua idade:<input type="text" name="idade"></p>
    <p><input type="submit" value="Enviar dados"></p>
</form>
</body>

</html>
