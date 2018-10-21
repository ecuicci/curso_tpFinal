<?php
class productos_model extends CI_Model  {

   function __construct(){
      parent::__construct();
   }
   
   public function getAll(){
       $this->db->select("denominacion");
       $this->db->from("productos as p");
       //$this->db->join("categoria as c", "c.idcategoria = p.idcategoria );
       //$this->db->where("id", 1);
       $consulta = $this->db->get();
       $resultados = $consulta->result_array();
       return $resultados;
   }   
   public function getById($id){
        $this->db->select("denominacion");
        $this->db->from("productos");
        $this->db->where("id",$id);
        $consulta = $this->db->get();
        $resultados = $consulta->result_array();
        return $resultados;
   }
   public function save(){
        $data["denominacion"]="ddasdas";
        $data["precio"]="100";
        $this->db->insert("productos",$data);
    
    }
    public function update(){
        $data["denominacion"]="ddasdas";
        $data["precio"]="100";
        $this->db->where("id",1);
        $this->db->update("productos",$data);
    }
   
}
?>