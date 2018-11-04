<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

    public function index()
    { 
        $this->load->model("productos_model");
        $todosLosProductos = $this->productos_model->getAll();
       
        $parametros["title"] = "Productos";
        $parametros["productos"] = array();
        foreach($todosLosProductos as $key => $valor ){
             
                if($valor["stock"] == '1')
                {
                    $todosLosProductos[$key]["enStock"] = "Si";
                }else{
                    $todosLosProductos[$key]["enStock"] = "No";
                }
            

        }
        $parametros["productos"] = $todosLosProductos;
        $this->load->view('lista_productos', $parametros);
    }
    public function detalle($id)
    { 
        $this->load->model("productos_model");
        $resultado = $this->productos_model->getById($id);
        if($resultado == null){
            $message["heading"] = "Error";
            $message["message"] = "El producto no existe <br>";            

            $this->load->view('errors/html/error_general.php', $message);
        }else{
            if($resultado[0]["stock"] == '1')
                    {
                        $resultado[0]["enStock"] = "Si";
                    }else{
                        $resultado[0]["enStock"] = "No";
                    }

            $resultado["resultado"] = $resultado[0]; 
            
            $this->load->view('detalle_producto', $resultado);
        }
    }

    public function comprar()
        {  
            $idProd = $this->input->post("idProd");
            $cant = $this->input->post("mcantidad");
            $this->load->model("productos_model");
            $datosProd = $this->productos_model->getById($idProd); 
            $idUsuario = $_SESSION["id"];
            $precio = $datosProd[0]["precio"];
            $precio_total = $cant * $precio;

            $compra["id_producto"] = $idProd;
            $compra["cantidad"] = $cant;
            $compra["precio_total"] = $precio_total;
            $compra["id_usuario"] = $idUsuario;

          //si no tiene una compra pendiente, le abro una nueva...
          
          $this->load->model("compras_model");
            $compras = $this->compras_model->getComprasByIdUsuario($idUsuario);
            if($compras == null){
               var_dump( $this->compras_model->crearOrden($compra)); exit();
                //tabla compras
             
            }else{
                $this->AgregarAOrden($compra);
               
            }
        }

    public function crearOrden($compra){

    }

     
}

    