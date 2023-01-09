<?php

// WHILE = Es un bucle que se ejecuta tantas veces hasta que la condición sea verdadera.

// Sintáxis

/* while (Condición) {
    // Código
} */ 

// Ejercicio de ejemplo: Muestra los números del 1 al 100.

$i = 1;
while($i<=100){

    echo $i;
    if($i < 100){
        echo ", ";
    } else {
        echo ".";
    }
    $i++;


}