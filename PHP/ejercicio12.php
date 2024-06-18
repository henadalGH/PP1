<?php

class Persona
{
    private $nombre;
    private $edad;
    
  
    //metodo que carga el nombre.
    public function setNombre( $nombre)
    {
        $this-> nombre = $nombre;
    }

    //metodo que carga la edad.
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    //metodo que retorna el nombre 
    public function getNombre()
    {
        return $this->nombre;
    }

    // metodo que retorna la edad 
    public function getEdad()
    {
        return $this-> edad;
    }
    
    public function mostrar()
    {
        
    }
}



class Empleado extends Persona
{
    private $sueldo;

    //metodo que carga el sueldo
    public function setSueldo($sueldo)
    {
    $this -> sueldo = $sueldo;
    }

    //metodo que retorna el sueldo
    public function getSueldo()
    {
        return $this -> sueldo;
    }


        

}
        

?>