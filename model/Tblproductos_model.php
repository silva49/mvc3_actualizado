<?php


    class Tblproductos_model{
       private $bd;
       private $tblproductos;
     
        public function __construct(){
         $this->bd=conexion::getConexion();
         $this->tblproductos = array();
        }
        public function insertProductos($dato){
            $idcategoria = $dato['idcategoria'];
            $nombre = $dato['nombreproducto'];
            $precio= $dato['precio'];
            $consulta ="INSERT INTO  tblproductos (idcategoria,nombre,precio) VALUES ($idcategoria,'$nombre',$precio)";
            mysqli_query($this->bd,$consulta) or die ("error al guardar el producto");
    
        }
        public function consultaProductos(){
            $consulta=$this->bd->query(" SELECT p.id, c.nombre as 'categoria',p.nombre, p.precio FROM tblproductos p INNER JOIN tblcategorias c ON p.idcategoria = c.id;");
            while($fila=$consulta->fetch_assoc()){
                $this->tblproductos[]=$fila;
            }
            return $this->tblproductos;



        }
   



    }
    

?>