<?php
$testo = $_GET['testo'];
$censura = $_GET['censura'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compPhp</title>
</head>
<body>
    <div>
        <h1>Il testo inserito è:<?php echo $testo . " " . "lunghezza testo:" . strlen($testo)?></h1>
        <h2>Il nuovo testo censurato è:<?php echo str_replace($censura, "***" , $testo) . " " . "lunghezza parola:" . strlen($testo) ?></h2>
    </div>
</body>
</html>