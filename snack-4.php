<?php
/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

$listaNumeri = [];

while (count($listaNumeri) < 15) {
    $numero = rand(1, 100);

    if (!in_array($numero, $listaNumeri)) {
        $listaNumeri[] = $numero;
    }
}

var_dump($listaNumeri);
?>

