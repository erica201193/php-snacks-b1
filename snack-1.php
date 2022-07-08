<?php
/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */


$matches = [
    [
        "hometeam" => "CHICAGO BULLS",
        "visitingteam" => "NEW YORK KNICKS",
        "homescore" => rand(80, 140),
        "visitingscore" => "",
    ],
    [
        "hometeam" => "MIAMI HEAT",
        "visitingteam" => "DETROIT PISTONS",
        "homescore" => "",
        "visitingscore" => "",
    ],
    [
        "hometeam" => "DALLAS MAVERICKS",
        "visitingteam" => "MEMPHIS GRIZZLIES",
        "homescore" => "",
        "visitingscore" => "",
    ],
    [
        "hometeam" => "LOS ANGELES LAKERS",
        "visitingteam" => "PHOENIX SUNS",
        "homescore" => "",
        "visitingscore" => "",
    ],
    [
        "hometeam" => "BOSTON CELTICS",
        "visitingteam" => "TORONTO RAPTORS",
        "homescore" => "",
        "visitingscore" => "",
    ],
    [
        "hometeam" => "LA CLIPPERS",
        "visitingteam" => "ATLANTA HAWKS",
        "homescore" => "",
        "visitingscore" => "",
    ],
    [
        "hometeam" => "PHILADELPHIA 76ERS",
        "visitingteam" => "SACRAMENTO KINGS",
        "homescore" => "",
        "visitingscore" => "",
    ],
];

var_dump($matches);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>

    <!-- CSS Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">

        <?php
        for ($i = 0; $i < count($matches); $i++) {
            $match = $matches[$i];
        ?>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div><?php echo $match["hometeam"] . " " . $utenteCorrente["lastname"] ?></div>
                </div>
            </div>
        </div>

            <h2>08/07/2022 - Football matches:</h2>
        </div>
    </div>
</body>
</html>