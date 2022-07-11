<?php
/* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok
stampare “Accesso riuscito”, altrimenti “Accesso negato” */

// Controllo che la chiave esista nell'array $_GET

$name = key_exists("name", $_GET) ? $_GET["name"] : '';
$mail = key_exists("mail", $_GET) ? $_GET["mail"] : '';
$age = key_exists("age", $_GET) ? $_GET["age"] : '';

$nameValid = false;
$emailValid = false;
$ageValid = false;
$dataValid = false;

if(strlen($name) > 3) {
    $nameValid = true;
}

if(strstr($mail, "@") > 2 && strpos($mail, ".") > 4) {
    $emailValid = true;
}

if(is_numeric((int)$age)) {
    $ageValid = true;
}

$dataValid = $nameValid && $emailValid && $ageValid

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>

    <!-- CSS Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <?php if ($dataValid) {
            echo "Accesso consentito";
        } else {
            echo "Accesso non consentito";
        }
        
        ?>
    </div>
</body>
</html>