<?php
class productos_model extends CI_Model  {

   function __construct(){
      parent::__construct();
   }

    public function getById($id){  
        $this->db->select('*');
        $this->db->from("productos");
        $this->db->where("id",$id);
        $consulta = $this->db->get();
        $resultados = $consulta->result_array();
        return $resultados;
   }

   public function getAll(){
       $this->db->select('*');
       $this->db->from("productos");
       $consulta = $this->db->get();
       $resultados = $consulta->result_array();
       return $resultados;
   }   
     
}
?>