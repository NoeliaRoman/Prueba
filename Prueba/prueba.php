<?php

class Persona {
    public $nombre;
    public $peso;
    public $estatura;
    
    function CalcularIMC($nombre, $peso, $estatura){
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->estatura = $estatura;
        $IMC = $peso / ($estatura * $estatura);

        if($IMC <= 18.5){
            echo "La persona ".$this->nombre. " con el peso " .$this->peso. " y la estatura " .$this->estatura. " tiene un peso bajo :c";
        }elseif( $IMC >= 30.0 ){
            echo "La persona ".$this->nombre. " con el peso " .$this->peso. " y la estatura " .$this->estatura. " tiene Obesidad :C";
        }elseif($IMC >= 25.0 && $IMC <= 29.9){
            echo "La persona ".$this->nombre. " con el peso " .$this->peso. " y la estatura " .$this->estatura. " tiene sobrepeso";
        }else{
            echo "La persona ".$this->nombre. " con el peso " .$this->peso. " y la estatura " .$this->estatura. " tiene peso Saludable :D";

        }

    }

}



?>