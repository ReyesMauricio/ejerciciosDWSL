<?php
/*Ejercicio 1*/
/*Se asignan las variables con sus respectivos valores*/
//-----------------------------------------------------------------------------------------------------
// $salario = 566;

// if($salario <= 450){
//     $descuento = $salario *(0.08);
//     $total = $salario - $descuento;
//     echo "El descuento mensual del 8%, total descuento $$descuento, total credito: $$total <br/>";
// }else if($salario <= 800){
//     $descuento = $salario *(0.15);
//     $total = $salario - $descuento;
//     echo "El descuento mensual del 15%, total descuento $$descuento, total credito: $$total <br/>";
// }else if($salario <= 800){
//     $descuento = $salario *(0.18);
//     $total = $salario - $descuento;
//     echo "El descuento mensual del 18%, total descuento $$descuento, total credito: $$total <br/>";
// }else{
//     $descuento = $salario *(0.20);
//     $total = $salario - $descuento;
//     echo "El descuento mensual del 20%, total descuento $$descuento, total credito: $$total <br/>";
// }
//-----------------------------------------------------------------------------------------------------

/*Ejercicio 2*/
//-----------------------------------------------------------------------------------------------------
// $precioProducto = 0.75;
// $saldo = 5.00;

// $suelto = $saldo-$precioProducto;
// echo "Compra completa. Total ingresado: $saldo, cambio total: $suelto";
//-----------------------------------------------------------------------------------------------------

/*Ejercicio 3*/
//-----------------------------------------------------------------------------------------------------
/*SE CREA UNA CARPETA CON EL NOMBRE DE "img" donde se guarda el archivo llamado "pokemon.gif"*/
// $numImagen = 6;
//     for ($i = 1; $i <=$numImagen; $i++) {
//         echo "<img src='./img/pokemon.gif' style='max-width:5%; padding:10px'>";
//     }
//-----------------------------------------------------------------------------------------------------

/*Ejercicio 4*/
//-----------------------------------------------------------------------------------------------------
// $precio = 1;
// $credito = 5;
// $totalCreditos = $credito;

// while ($totalCreditos >= $precio){
//     echo "Tu crédito actual es:" .$totalCreditos. "<br/><p>";
//     $totalCreditos -= $precio;
// }

// echo "Recarga para seguir jugando.";

//-----------------------------------------------------------------------------------------------------

/*Ejercicio 5*/
//-----------------------------------------------------------------------------------------------------
$CantidadPuntos = 500;

if($CantidadPuntos == 100){
    echo "¡Ganaste $40.00!";
}elseif ($CantidadPuntos  == 200){
    echo "¡Ganaste $60.00!";
}elseif ($CantidadPuntos == 400){
    echo "¡Ganaste $80.00!";
}elseif ($CantidadPuntos  == 500){
    echo "¡Ganaste $100.00";
}else{
    echo "No hay premio.";
} 
//-----------------------------------------------------------------------------------------------------

?>
