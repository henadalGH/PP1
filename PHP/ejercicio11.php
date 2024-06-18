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
    

}

echo " <strong> objeto de la clase Persona </strong>";
echo "<br>";

    $persona = new Persona( );
    $persona->setNombre("Juan");
    $persona->setEdad(30);
    
    echo "El nombre es: " . $persona-> getNombre() . "<br>"; // Mostrar el nombre
    echo "La edad es: " . $persona->getEdad(); // Mostrar la edad


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
        echo "<br>";
        echo "<strong> objeto de la clase Empleado </strong>";
        echo "<br>";

        $empleado = new Empleado();
        $empleado-> setNombre("Pedro");
        $empleado->setEdad(45);
        $empleado->setSueldo(100000);
        echo "El nombre es:" . $empleado-> getNombre() . "<br>" ;
        echo "La edad es: " . $empleado-> getEdad() . "<br>" ;
        echo "El sueldo es: " . $empleado-> getSueldo();
?>