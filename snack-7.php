<?php
/* Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. */

$listaStudenti = [
    [
        "nome" => "Andrea",
        "cognome" => "Bianchi",
        "voti" => [
            "italiano" => 6,
            "matematica" => 8,
            "inglese" => 7,
            "educazione fisica" => 10,
            "arte e immagine" => 5,
            "musica" => 6,
        ],
    ],
    [
        "nome" => "Francesca",
        "cognome" => "Russo",
        "voti" => [
            "italiano" => 8,
            "matematica" => 8,
            "inglese" => 8,
            "educazione fisica" => 8,
            "arte e immagine" => 8,
            "musica" => 8,
        ],
    ],
    [
        "nome" => "Alessio",
        "cognome" => "Mazzella",
        "voti" => [
            "italiano" => 8,
            "matematica" => 6,
            "inglese" => 9,
            "educazione fisica" => 5,
            "arte e immagine" => 6,
            "musica" => 7,
        ],
    ],
    [
        "nome" => "Giulia",
        "cognome" => "Neri",
        "voti" => [
            "italiano" => 6,
            "matematica" => 10,
            "inglese" => 4,
            "educazione fisica" => 7,
            "arte e immagine" => 7,
            "musica" => 6,
        ],
    ],
    [
        "nome" => "Lorenzo",
        "cognome" => "Totti",
        "voti" => [
            "italiano" => 9,
            "matematica" => 7,
            "inglese" => 5,
            "educazione fisica" => 9,
            "arte e immagine" => 6,
            "musica" => 10,
        ],
    ]
    ];

    for ($i=0; $i < count($listaStudenti); $i++) { 
        $studente = $listaStudenti[$i];

        $voti = array_values($studente["voti"]);

        $mediaVoti = round(array_sum($voti) / count($voti), 1);

        echo $studente["nome"] . " " .  $studente["cognome"] . " : " . $mediaVoti . "<br>";
        
    }

?>