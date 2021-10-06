<?php
require_once 'prueba.php';

$prueba1 = new Persona;
//$prueba1->$nombre = 'Juan Perez';
//$prueba1->$peso = 64;
//$prueba1->$estatura = 1.6;
$prueba1->CalcularIMC('Juan Perez',90 , 1.6);

?>