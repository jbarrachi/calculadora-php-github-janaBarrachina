<?php

$operacio = $_POST['op'];
$primerNumero = $_POST['n1'];
$segonNumero = $_POST['n2'];

function calcular($operacio, $primerNumero, $segonNumero) {
    switch ($operacio) {
        case "s":
            return $primerNumero + $segonNumero;

        case "r":
            return $primerNumero - $segonNumero;

        case "m":
            return $primerNumero * $segonNumero;

        case "d":
            if ($segonNumero == 0) {
                return "Error: divisió per zero";
            }
            return $primerNumero / $segonNumero;

        default:
            return "Error: operació desconeguda";
    }
}

$resultat = calcular($operacio, $primerNumero, $segonNumero);

echo $resultat;

?>