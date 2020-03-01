


<?php

require_once 'model/Tblproductos_model.php';
require_once 'model/Tblcategorias_model.php';
require_once 'model/Tblventas_model.php';
require_once 'controller/Tblproductos_controller.php';

class Tblventas_controller{

    private $model_productos;
    private $model_categorias;
    private $model_ventas;

    public function __construct(){

        $this->model_productos=new Tblproductos_model();
        $this->model_categorias=new Tblcategorias_model();
        $this->model_ventas=new Tblventas_model();
    }

    public function menuVentas(){
        $consultaProductos= $this->model_productos->consultaProductos();
        $consultaCategorias= $this->model_categorias->consultarCategorias();
        
        require_once 'view/menuVentas.php';
    }
    public function guardarProducto(){
        $dato['idcategoria']=$_POST["selcategorias"];
        $dato['nombreproducto']=$_POST["txtnombre"];
        $dato['precio']=$_POST["txtprecio"];
        $dato['cantidad']=$_POST["txtcantidad"];
        $this->model_productos->insertProductos($dato);
        $this->menuVentas();
    }
   

 
}




?>