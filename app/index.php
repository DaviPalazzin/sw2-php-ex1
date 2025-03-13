<?php
//$nome = $_GET['nome'];
$nome = '';
$periodo = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$nome = $_POST['nome'];
$periodo = $_POST['periodo'];
    switch($periodo) {
        case 'm':
            $mensagem = "Bom dia $nome";
        break;
        case 't':
            $mensagem = "Boa Tarde $nome";
        break;
        case 'n':
            $mensagem = "Boa Noite $nome";
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Aplicação</title>
</head>
<body>
    
    <h1>
<!--Forma mais dificil de usar o HTML junto ao PHP-->
        <?php 
        if($periodo == 'm') {
            echo 'Bom dia <i>' . $nome . '</i>';
        } elseif($periodo == 't') {
            echo 'Boa Tarde' . $nome;
        } elseif($periodo == 'n')
        echo 'Boa Noite' . $nome;
        ?>
    </h1>

    <h1>
        <!--Forma mais Facil de usar o PHP com o HTML-->
        <?php if($periodo == 'm'): ?>
        Bom Dia <i><?= $nome ?></i>
        <?php elseif($periodo == 't'): ?>
            Boa Tarde <?= $nome ?>
            <?php elseif($periodo == 'n'): ?>
                Boa Noite <?= $nome ?>
                <?php endif ?>
    </h1>

    <h1><?= $mensagem?></h1>
    <form action="/index.php" method="post">
        <label for="periodo">Selecione o Período</label>
        <select name="periodo">
            <option value="m">Manhâ</option>
            <option value="t">Tarde</option>
            <option value="n">Noite</option>
        </select>
        <br>
        <label for="nome">Digite seu nome</label>
        <input type="text" name="nome" />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>