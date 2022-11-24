<?php

// 1. Según la edad introducida por el usuario, determinar si es mayor o menor de edada.

function main ($age){
    if($age<18){
        echo ("Eres menor de edad.");
    } else {
        echo ("Eres mayor de edad.");
    }
}

main(16);
