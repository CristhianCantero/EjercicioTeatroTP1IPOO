<?php
class Teatro{
    private $nombre;
    private $direccion;
    private $nombreFuncion1;
    private $precioFuncion1;
    private $nombreFuncion2;
    private $precioFuncion2;
    private $nombreFuncion3;
    private $precioFuncion3;
    private $nombreFuncion4;
    private $precioFuncion4;
    
    public function __construct($nombre, $direccion, $coleFunciones)
    {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->nombreFuncion1 = $coleFunciones["funcion1"]["nombre"];
        $this->nombreFuncion2 = $coleFunciones["funcion2"]["nombre"];
        $this->nombreFuncion3 = $coleFunciones["funcion3"]["nombre"];
        $this->nombreFuncion4 = $coleFunciones["funcion4"]["nombre"];
        $this->precioFuncion1 = $coleFunciones["funcion1"]["precio"];
        $this->precioFuncion2 = $coleFunciones["funcion2"]["precio"];
        $this->precioFuncion3 = $coleFunciones["funcion3"]["precio"];
        $this->precioFuncion4 = $coleFunciones["funcion4"]["precio"];
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getNombreFuncion1(){
        return $this->nombreFuncion1;
    }
    public function getNombreFuncion2(){
        return $this->nombreFuncion2;
    }
    public function getNombreFuncion3(){
        return $this->nombreFuncion3;
    }
    public function getNombreFuncion4(){
        return $this->nombreFuncion4;
    }
    public function getPrecioFuncion1(){
        return $this->precioFuncion1;
    }
    public function getPrecioFuncion2(){
        return $this->precioFuncion2;
    }
    public function getPrecioFuncion3(){
        return $this->precioFuncion3;
    }
    public function getPrecioFuncion4(){
        return $this->precioFuncion4;
    }

    public function setNombre($n){
        $this->nombre = $n;
    }
    public function setDireccion($d){
        $this->direccion = $d;
    }
    public function setNombreFuncion1($nombFun1){
        $this->nombreFuncion1 = $nombFun1;
    }
    public function setNombreFuncion2($nombFun2){
        $this->nombreFuncion2 = $nombFun2;
    }
    public function setNombreFuncion3($nombFun3){
        $this->nombreFuncion3 = $nombFun3;
    }
    public function setNombreFuncion4($nombFun4){
        $this->nombreFuncion4 = $nombFun4;
    }
    public function setPrecioFuncion1($precioFun1){
        $this->precioFuncion1 = $precioFun1;
    }
    public function setPrecioFuncion2($precioFun2){
        $this->precioFuncion2 = $precioFun2;
    }
    public function setPrecioFuncion3($precioFun3){
        $this->precioFuncion3 = $precioFun3;
    }
    public function setPrecioFuncion4($precioFun4){
        $this->precioFuncion4 = $precioFun4;
    }

    public function cambiarNombre($nomb){
        $this->setNombre($nomb);
    }
    public function cambiarDireccion($dire){
        $this->setDireccion($dire);
    }
    public function cambiarFuncion1($funcion1){
        $this->setNombreFuncion1($funcion1["nombre"]);
        $this->setPrecioFuncion1($funcion1["precio"]);
    }
    public function cambiarFuncion2($funcion2){
        $this->setNombreFuncion2($funcion2["nombre"]);
        $this->setPrecioFuncion2($funcion2["precio"]);
    }
    public function cambiarFuncion3($funcion3){
        $this->setNombreFuncion3($funcion3["nombre"]);
        $this->setPrecioFuncion3($funcion3["precio"]);
    }
    public function cambiarFuncion4($funcion4){
        $this->setNombreFuncion4($funcion4["nombre"]);
        $this->setPrecioFuncion4($funcion4["precio"]);
    }

    public function __toString()
    {
        return  "Nombre del teatro: " . $this->getNombre() . "\n" .
                "Direccion del teatro: " . $this->getDireccion() . "\n" .
                "Nombre funcion 1: " . $this->getNombreFuncion1() . "\n" .
                "Precio funcion 1: " . $this->getPrecioFuncion1() . "\n" .
                "Nombre funcion 2: " . $this->getNombreFuncion2() . "\n" .
                "Precio funcion 2: " . $this->getPrecioFuncion2() . "\n" .
                "Nombre funcion 3: " . $this->getNombreFuncion3() . "\n" .
                "Precio funcion 3: " . $this->getPrecioFuncion3() . "\n" .
                "Nombre funcion 4: " . $this->getNombreFuncion4() . "\n" .
                "Precio funcion 4: " . $this->getPrecioFuncion4();
    }
}
