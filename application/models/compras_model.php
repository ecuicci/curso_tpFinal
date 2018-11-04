<?php
class compras_model extends CI_Model  {

   function __construct(){
      parent::__construct();
   }

   public function getComprasByIdUsuario($idUsuario){
    $this->db->select('*');
    $this->db->from("compras");
    $condition = array('id_usuario' => $idUsuario, 'id_estado' => 2);

    $this->db->where($condition);
    $consulta = $this->db->get();
    $resultados = $consulta->result_array();
    return $resultados;
   }

   public function crearOrden($compra){
       $data["id_usuario"] = $compra["id_usuario"];
       $data["id_estado"] = "2";

    $this->db->insert('compras',$data);
   }
}
   