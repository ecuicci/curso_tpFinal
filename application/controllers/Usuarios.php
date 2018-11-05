<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {


    public function index()
    {
        $this->load->view('login');  
    }

    public function validar()
    {    
      $correo = $this->input->post("correo");
      $pass = $this->input->post("password");

      $this->load->model("usuarios_model");
      $usuario = $this->usuarios_model->getByCorreo($correo);
      
      if($usuario != false){
            //seguir confirmar que sean datos validos  
            if($usuario[0]["pass"] == $pass){
                $this->load->library('session');
                $_SESSION["name"]=$usuario[0]["nombre"];
                $_SESSION["id"]=$usuario[0]["id"];
                $this->list_productos($usuario[0]);
            }else{
                $parametros["mensaje"] = "Su datos de ingreso no son validos";
                $parametros["tipo_mensaje"] = "warning";
                $this->load->view('login', $parametros);
            }
        }else{
            $parametros["mensaje"] = "Su datos de ingreso no son validos";
            $parametros["tipo_mensaje"] = "warning";
            $this->load->view('login', $parametros);
        }
            
        
        
      
    }

    public function registrese(){
        $this->load->view('registro'); 
    }

    public function guardarRegistros(){

        $datos = $this->input->post();

        $this->load->model("usuarios_model");
        $guardar = $this->usuarios_model->save($datos);

       if($guardar == true){
        $parametros["mensaje"] = "Se ha registrado correctamente";
        $parametros["tipo_mensaje"] = "info";
        $this->load->view('login', $parametros);
       }
    }

    public function list_productos($usuario)
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

        $idUsuario = $_SESSION["id"];
        $this->load->model("compras_model");
        $compras = $this->compras_model->getComprasByIdUsuario($idUsuario);


        $parametros["productos"] = $todosLosProductos;
        $parametros["usuario"] = $usuario;
        $parametros["compras"] = $compras;
        $this->load->view('lista_productos', $parametros);
    }

}