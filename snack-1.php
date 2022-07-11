<?php
/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */


$matches = [
    [
        "home" => "CHICAGO BULLS",
        "visiting" => "NEW YORK KNICKS",
        "homescore" => rand(80, 140),
        "visitingscore" => rand(80, 140),
    ],
    [
        "home" => "MIAMI HEAT",
        "visiting" => "DETROIT PISTONS",
        "homescore" => rand(80, 140),
        "visitingscore" => rand(80, 140),
    ],
    [
        "home" => "DALLAS MAVERICKS",
        "visiting" => "MEMPHIS GRIZZLIES",
        "homescore" => rand(80, 140),
        "visitingscore" => rand(80, 140),
    ],
    [
        "home" => "LOS ANGELES LAKERS",
        "visiting" => "PHOENIX SUNS",
        "homescore" => rand(80, 140),
        "visitingscore" => rand(80, 140),
    ],
    [
        "home" => "BOSTON CELTICS",
        "visiting" => "TORONTO RAPTORS",
        "homescore" => rand(80, 140),
        "visitingscore" => rand(80, 140),
    ],
    [
        "home" => "LA CLIPPERS",
        "visiting" => "ATLANTA HAWKS",
        "homescore" => rand(80, 140),
        "visitingscore" => rand(80, 140),
    ],
    [
        "home" => "PHILADELPHIA 76ERS",
        "visiting" => "SACRAMENTO KINGS",
        "homescore" => rand(80, 140),
        "visitingscore" => rand(80, 140),
    ],
];

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
        <h2 class="text-center pt-5 pb-3">08/07/2022 - Football matches:</h2>
        <div class="row row-cols-2">
        <?php
        for ($i = 0; $i < count($matches); $i++) {
            $singleMatch = $matches[$i];
        ?>
        <div class="col my-3">
            <div class="card py-3">
                <div class="card-body d-flex">
                    <span><?php echo $singleMatch["home"] . " - " . $singleMatch["visiting"] . " | "?></span>
                    <span class="fw-bold ms-auto"><?php echo $singleMatch["homescore"] . " - " . $singleMatch["visitingscore"]?></span>
                </div>
            </div>

        </div>
        <?php } ?>
        </div>
    </div>
</body>
</html>