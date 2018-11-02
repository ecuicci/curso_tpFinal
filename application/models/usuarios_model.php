<?php
class usuarios_model extends CI_Model  {

   function __construct(){
      parent::__construct();
   }

   public function save($datos){
    $usuario["nombre"] = $datos["nombre"];
    $usuario["correo"] = $datos["email"];
    $usuario["pass"] = $datos["password"];
    $usuario["estado"] = "Activo";  
    $this->db->insert("usuarios", $usuario);
   
    return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function getByCorreo($correo){
        $this->db->select("*");
        $this->db->from("usuarios");
        $this->db->where("correo", $correo);
        $usuario = $this->db->get();
        return ($this->db->affected_rows() == 0) ? false : $usuario->result_array();
        
       
   }
}