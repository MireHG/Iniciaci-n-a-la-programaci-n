<?php


/* ***** EJERCICIOS CONDICIONAL IF ***** */

// 0. Según la edad introducida por el usuario, determinar si es mayor o menor de edada.

//function main ($age){
    //if($age<18){
        //echo ("Eres menor de edad.");
    //} else {
        //echo ("Eres mayor de edad.");
    //}
//}

//main(16);

//Ejercicio 1. El usuario introduce 3 notas. Calcular la media aritmética de las notas introducidas. Si el usuario tiene la media aprobada, mostrar por pantalla un mensaje diciendo que está aprobado. En caso contrario, mostraremos que ha suspendido.

//function main ($score1, $score2, $score3){
    //$suma = $score1 + $score2 + $score3;
   // $media = $suma/3;
     //if($media>=5){
        //echo ("Has aprobado.");
    //} else {
        //echo ("Has suspendido.");
    //}
//}
//main(3,5,4);

//Ejercicio 2. En MegaPlaza se hace un 20% de descuento a los clientes cuya compra supere los 300. El usuario debe introducir el total de su compra y, si supera los 300, mostrar por pantalla que tiene un descuento del 20% y aplicar ese descuento. En caso de que no opte a descuento, simplemente se mostrará el precio de su compra.

//function main ($purchase){
        //if($purchase > 300){
            //$discount = $purchase - $purchase*20/100; 
            //echo ("Tienes un descuento del 20%. El total tras el descuento es" . " " . $discount);
        //} else {
            //echo ("El total de tu compra es" . " " . $purchase);
        //}
//}
//main (400);

//Ejercicio 3. Un albañil necesita calcular su salario semanal, el cual se obtiene de la siguiente manera:
//Si trabaja 40 horas o menos, se le paga $16 por hora
//Si trabaja más de 40 horas se le paga $16 por cada una de las primeras 40 horas y $20 por cada hora extra.
//Mostrar por pantalla el resultado de su salario semanal en función de las horas que introduzca el usuario

//function main ($weekly_salary){
    //$salary_frame = 40;
    //var_dump($extra); --> para mostrar qué da $extra.
        //if($weekly_salary <= $salary_frame){
            //echo($weekly_salary * 16);
        //} else {
            //$extra = ($weekly_salary - $salary_frame) * 20;
            //var_dump($weekly_salary * 16);
            //echo(($salary_frame) * 16) + $extra;
        //}
 //}

//main (50);

//Ejercicio 4. Realiza un programa donde el usuario introduzca su email y contraseña. Si los datos son correctos, mostraremos un mensaje por pantalla que diga: ¡Sesión iniciada!. En caso contrario, mostrar: Los datos introducidos son incorrectos.

/*function main ($user,$pass){
    if($user == "mireya" && $pass == "12345"){
        echo("¡Sesión iniciada!");
    } else {
        echo("Los datos introducidos son incorrectos.");
    }
} 

main("mireya", "12335");*/

/* ***** EJERCICIOS BUCLE FOR ***** */

// Ejercicio 1. Mostrar por pantalla los número impares del 1 al 100.

/* for ($i=0;$i<=100;$i++){
    if($i % 2 != 0){
        echo $i . ", ";
    }
} */

// Ejercicio 2. Dado un array de números, mostrar por pantalla los que sean mayor de 5.

function main ($arrayDeNumeros){
    for($i = 0; $i < \count($arrayDeNumeros); $i++){
        if($arrayDeNumeros[$i]> 5){
            echo $arrayDeNumeros[$i] . ", " ; //Si en lugar de $arrayDeNumeros[$i], pusiéramos solo [$i] nos mostraría la posición que cumple la condición dentro del array.
        }
    }
}

main([5, 7, 2, 34, 89]);

// Ejercicio 3. Dado un array de números, mostrar el mayor de ellos.

function main($arrayDeNumeros){
    for($i=0;$i)

//En proceso.
}

main ([5, 9, 45, 12, 67, 1])
