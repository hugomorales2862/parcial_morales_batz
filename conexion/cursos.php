<?php
require 'conexion.php';

class Curso extends Conexion {
    public $id;
    public $nombre;
    public $periodos;
    public $fase;
    public $instructor;
    public $creditos;
    public function __construct ($args = [])
    {
        $this-> id = $args ['id'] ?? null;
        $this-> nombre = $args ['nombre'] ?? null;
        $this-> periodos = $args ['periodos'] ?? null;
        $this-> fase = $args ['fase'] ?? null;
        $this-> instructor = $args ['instructor'] ?? null;
        $this-> creditos = $args ['creditos'] ?? null;
    }
    public function guardar (){
        $sql= "INSERT INTO curso(id,nombre,periodos,fase,instructor,creditos) values('$this->id','$this->nombre','$this->periodos','$this->fase','$this->instructor','$this->creditos')";    
        // echo $sql;
        // exit;
        $resultado = $this->ejecutar($sql);
        return $resultado;
       
    }

}

?>