<?php

require_once 'model/Tblcategorias_model.php';
class Tblcategorias_controller{

    private $model_categorias;

    public function __construct(){

        $this->model_categorias=new Tblcategorias_model();
    }
    public function modificar(){
        $id = $_REQUEST['id'];
        $consulta = $this->model_categorias->consultarPorId("SELECT * FROM tblcategorias WHERE id=$id");
       
        require_once 'view/modificar_view.php';
    }

    public function menuCategorias(){
        $consulta =  $this->model_categorias->consultarCategorias();
        require_once 'view/menuCategorias.php';
    }

    public function guardarCategoria(){
        $dato['nombre']=$_POST["txtnombre"];
        $this->model_categorias->insertarCategoria($dato);
        $this->menuCategorias();
    }
    public function guardarCambiosCategoria(){
        $dato['id']  = $_POST["txtid"];
        $dato['nombre'] = $_POST["txtnombre"];
        $this->model_categorias->actualizarCategorias($dato);
        $this->menuCategorias();
    }

}




?>