<?php
// Definimos la clase
class Animales {
     
    // Atributos
    public $fecha;
    public $nombre;
    public $chip;
    public $tipo;
    
     
    // Constructor
    public function __construct($fecha, $nombre,$chip,$tipo){
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->chip = $chip;
        $this->tipo = $tipo;
        
    }
     
    //Métodos
    public function getNombre(){
    // Devolvemos un atributo
        return $this->nombre;
    }
     
    public function setNombre($nombre){
    //Le damos un valor a un atributo
        $this->nombre = $nombre;
    }

    public function getFecha(){
        // Devolvemos un atributo
            return $this->fecha;
        }
         
    public function setFecha($fecha){
        //Le damos un valor a un atributo
            $this->fecha = $fecha;
    }
    
    public function getTipo(){
        // Devolvemos un atributo
            return $this->tipo;
        }
         
    public function setTipo($tipo){
        //Le damos un valor a un atributo
            $this->tipo = $tipo;
    }

    public function getChip(){
        // Devolvemos un atributo
        return $this->chip;
    }
             
    public function setChip($chip){
        //Le damos un valor a un atributo
        $this->chip = $chip;
    }
    
    public function mostrar(){
        echo $this->nombre;
    }
          

}
?>