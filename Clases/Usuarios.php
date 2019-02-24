<?php
// Definimos la clase
class Usuarios {
     
    // Atributos
    public $email;
    public $nombre;
    
     
    // Constructor
    public function __construct($email, $nombre){
        $this->nombre = $nombre;
        $this->email = $email;
        
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

    public function getEmail(){
        // Devolvemos un atributo
        return $this->email;
    }
             
    public function setEmail($email){
        //Le damos un valor a un atributo
        $this->email = $email;
    }
    
    public function mostrar(){
        echo $this->nombre;
    }
          

}
?>