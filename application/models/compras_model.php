<?php
class compras_model extends CI_Model  {

   function __construct(){
      parent::__construct();
   }

   public function getComprasPendientesByIdUsuario($idUsuario){
    $this->db->select('*');
    $this->db->from("compras");
    $condition = array('id_usuario' => $idUsuario, 'id_estado' => 2);

    $this->db->where($condition);
    $consulta = $this->db->get();
    $resultados = $consulta->result_array();
    return $resultados;
   }

   public function getComprasByIdUsuario($idUsuario){
    $this->db->select('compras.id as id_carrito, prod.nombre as prod, cantidad, prod.precio as precio, precio_total, compra-prod.id as id_compra');
    $this->db->from("compras");
    $this->db->join('compra-prod' , 'compras.id = compra-prod.id_compra', 'left join');
    $this->db->join('productos prod' , 'prod.id = compra-prod.id_producto');
    $this->db->where("id_usuario", $idUsuario);
    $consulta = $this->db->get();
   

    $resultados = $consulta->result_array(); 
    return $resultados;
   }

   public function crearOrden($compra){
       $data["id_usuario"] = $compra["id_usuario"];
       $data["id_estado"] = "2";
    $this->db->insert('compras',$data);
   }

   public function AgregarAOrden($compra,$idCompra){

    $data["id_compra"] = $idCompra;
    $data["id_producto"] = $compra["id_producto"];
    $data["cantidad"] = $compra["cantidad"];
    $data["precio_total"] = $compra["precio_total"];
    $this->db->insert('compra-prod',$data);
    }
}
   