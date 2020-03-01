<?php

require_once 'model/Tblproductos_model.php';
require_once 'model/Tblcategorias_model.php';
class Tblproductos_controller{

    private $model_productos;
    private $model_categorias;

    public function __construct(){

        $this->model_productos=new Tblproductos_model();
        $this->model_categorias=new Tblcategorias_model();
    }

    public function menuProductos(){
        $consultaProductos= $this->model_productos->consultaProductos();
        $consultaCategorias= $this->model_categorias->consultarCategorias();
        require_once 'view/menuProductos.php';
    }
    public function guardarProducto(){
        $dato['idcategoria']=$_POST["selcategorias"];
        $dato['nombreproducto']=$_POST["txtnombre"];
        $dato['precio']=$_POST["txtprecio"];
        $this->model_productos->insertProductos($dato);
        $this->menuProductos();
    }

 
}




?>