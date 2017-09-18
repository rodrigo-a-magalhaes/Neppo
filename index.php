<?php
require_once('AutoLoad.php');
$get = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$message = null;
if (!empty($get)) {
    switch ($get['test']) {
        case 1:
            $quest1 = new question_1($get['num']);
            $message = $quest1->getResult();
            break;
        case 2:
            $quest2 = new question_2($get['num']);
            $message = $quest2->getResult();
            break;
        case 3:
            $quest3 = new question_3($get['num']);
            $message = $quest3->getResult();
            break;
        default:
            $message = 'Questão não encontrada';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Neppo - Teste</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>NEPPO - Teste de Lógica</h1>

<div class="btn">
    <p>Escolha a questão</p>
    <span id="q1">Questão 1</span>
    <span id="q2">Questão 2</span>
    <span id="q3">Questão 3</span>
</div>


<div id="t1" class="test">
    <h1>1. Fórmula Misteriosa</h1>

    <form action="" method="post">
        <input type="hidden" name="test" value="1">
        <input type="text" name="num"><br>
        <input type="submit" value="Enviar">
    </form>
</div>


<div id="t2" class="test">
    <h1>2. Máquina do tempo</h1>

    <form action="" method="post">
        <input type="hidden" name="test" value="2">
        <input type="text" name="num"><br>
        <input type="submit" value="Enviar">
    </form>
</div>

<div id="t3" class="test">
    <h1>3. Garçons Modernos</h1>

    <form action="" method="post">
        <input type="hidden" name="test" value="3">
        <input type="text" name="num"><br>
        <input type="submit" value="Enviar">
    </form>
</div>

<div class="msg" style="display: <?= (empty($message) ? 'none' : 'block') ?>">
    <span class="btn-close">X</span>
    <?= $message; ?>
</div>

<script src="js/jquery.js"></script>
<script src="js/action.js"></script>
</body>
</html>