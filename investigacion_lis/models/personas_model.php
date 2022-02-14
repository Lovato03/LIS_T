<?php
class personas_model{
    private $db;
    private $personas;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->personas=array();
    }
    
    public function get_personas(){
        $consulta=$this->db->query("select * from personas;");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }

    public function setPersona($nombre, $apellido, $carnet) {

        $sql = "INSERT INTO personas(nombre, apellido,carnet) VALUES ('" . $nombre . "', '" . $apellido . "', '" . $carnet . "')";
        $result = $this->db->query($sql);

        }

}
?>
