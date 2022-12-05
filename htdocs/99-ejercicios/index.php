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

/* function main ($arrayDeNumeros){
    for($i = 0; $i < \count($arrayDeNumeros); $i++){
        if($arrayDeNumeros[$i]> 5){
            echo $arrayDeNumeros[$i] . ", " ; //Si en lugar de $arrayDeNumeros[$i], pusiéramos solo [$i] nos mostraría la posición que cumple la condición dentro del array.
        }
    }
}

main([5, 7, 2, 34, 89]); */

// Ejercicio 3. Dado un array de números, mostrar el mayor de ellos.

/* function main($arrayDeNumeros){
    $numeroMayor = 0;
    for($i=0; $i < \count($arrayDeNumeros); $i++){ // $i = 0
        if($arrayDeNumeros[$i] > $numeroMayor){ // $arrayDeNumeros[$i] = 5
            $numeroMayor = $arrayDeNumeros[$i];
        }
    }
    echo("El mayor es " . $numeroMayor);

}

main ([5, 9, 45, 12, 67, 1]); */

// Ejercicio 4. Dado un array de palabras, mostrar por pantalla las que empiecen por A.

/* function main($arrayFrutas){
//    var_dump(substr(string: "manzana", offset: 0, lenght: 1)) // Muestra el montenido de un array. - Tres parámetros. El primero es string donde queremos buscar, el segundo la posición donde empieza y el tercero el número de caracteres que queremos mostrar.
    for($i=0; $i < \count($arrayFrutas); $i++){
        $primeraLetra = substr($arrayFrutas[$i], 0, 1);
        if($primeraLetra == "a"){
            echo $arrayFrutas[$i] . ", ";
        }
    }
}

main (["pera", "manzana", "arandano", "aguacate"]); */

// Ejercicio 5. Dada una contraseña, verificar si tiene, al menos, 2 mayúsculas y un número.

/* function main($password){
    $upperCounter = 0;
    $numberCounter = 0;

    for($i=0; $i < \strlen($password); $i++){
        $letter = substr($password, $i, 1);
        if(ctype_upper($letter)) { //Con el if, si no pones nada es true.
            $upperCounter++; // Incluimos ++ para que vaya añadiendo 1 si se cumple la condición. 
        }
        if(is_numeric($letter)){
            $numberCounter++;
        }
    }
    if($upperCounter >= 2 && $numberCounter >= 1){
        echo "La contraseña es válida.";
    } else {
        echo "La contraseña es inválida.";
    }
}

main("kjhdGidfG2sog"); */

//Formas de añadir 1 a una variables y que se guarde. Si fuera otro número se intercambia por el 1 y la tercera función no se puede usar.
//            $upperCounter = $upperCounter + 1;
//            $upperCounter += 1;
//            $upperCounter ++;

        
// Ejercicio 6. Mostrar la tabla de multiplicar del número que introduzca el usuario.
// La tabla tiene que mostrarse de la siguiente manera:
// 2 x 1 = 2
// 2 x 2 = 4
// ...
//Hasta el 10.
// Para hacer un salto de línea con un echo, escribir lo siguiente: echo[lo-que-queramos] . "<br/>"
// Ejemplo: echo "2 x 1 = 2" . "<br/>"
