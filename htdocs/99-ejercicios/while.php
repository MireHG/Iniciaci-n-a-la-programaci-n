<?php

/* ***** EJERCICIOS CONDICIONAL WHILE ***** */

// Ejercicio 1. Mostrar por pantalla los número impares del 1 al 100.

/* $i = 1;
while($i <= 100){
    
    if($i % 2 == 1){
        echo $i;
    
        if ($i < 99){
            echo ", ";
        } else {
            echo ".";
        } 
    }   

    $i++;
} */

// Ejercicio 2. Dado un array de números, mostrar por pantalla los que sean mayor de 5.

/* function main ($numbers){

    $i = 0;
    while($i < \count($numbers)){

        if($numbers[$i] > 5){
            echo $numbers[$i] . ", ";
        }

        $i++;
    }
}

main([6, 3, 10, 54, 23, 79, 2, 1]); */

// Ejercicio 3. Dado un array de números, mostrar el mayor de ellos.

/* function main ($numbers){

    $i = 0;
    $higher = $numbers[$i];
    while($i < \count($numbers)){

        if ($higher < $numbers[$i]){
        $higher = $numbers[$i];

        }
    $i++;
    }

    echo $higher;

}

main([6, 3, 10, 54, 23, 79, 2, 1]); */

// Ejercicio 4. Dado un array de palabras, mostrar por pantalla las que empiecen por A.

/* function main ($fruits){

    $i = 0;

    while($i < \count($fruits)){
        $firstletter = substr($fruits[$i], 0, 1);
        if($firstletter == "a"){
        echo $fruits[$i] . ", ";
        }
        $i++;
    }
}

main (["pera", "manzana", "arandano", "aguacate"]); */

// Ejercicio 5. Dada una contraseña, verificar si tiene, al menos, 2 mayúsculas y un número.

/* function main($pass){
    $i = 0;
    $upper = 0;
    $number = 0;
    while($i < \strlen($pass)){
        $letter = substr($pass, $i, 1);
        if(\ctype_upper($letter)){
            $upper++;
        }
        if(is_numeric($letter)){
            $number++;
        }
        $i++;
    }   
    if($upper >= 2 && $number >= 1){
        echo "Contraseña correcta.";
    } else {
        echo "Vete al pairo.";
    }
}

main("kjhdGidfG2sog"); */

// Ejercicio 6. Mostrar la tabla de multiplicar del número que introduzca el usuario.
// La tabla tiene que mostrarse de la siguiente manera:
// 2 x 1 = 2
// 2 x 2 = 4
// ...
// Hasta el 10.
// Para hacer un salto de línea con un echo, escribir lo siguiente: echo[lo-que-queramos] . "<br/>"
// Ejemplo: echo "2 x 1 = 2" . "<br/>"

/* function main($table){
    
    $i = 1;
    while($i <= 10){
        echo $table . " x " . $i . " = " . $table * $i . "<br/>";
        $i++;
    }
}

main(7); */

// Ejercicio 7. Dada una frase, decir el número de veces que aparece la letra "a".

function main($sentence){
    $i = 0;
    $numbersOfA = 0;
    while ($i <= \strlen($sentence)){
        $letter = substr($sentence, $i, 1);
        if($letter =="a"){
            $numbersOfA++;
        }
        $i++;
    } 
    echo "La letra A aparece " . $numbersOfA . " veces en la oración.";
}

main ("lleva la tarara un vestido blanco lleno de cascabeles");

