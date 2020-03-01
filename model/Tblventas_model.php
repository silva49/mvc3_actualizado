<?php


    class Tblventas_model{
       private $bd;
       private $tblventas;
     
        public function __construct(){
         $this->bd=conexion::getConexion();
         $this->tblventas = array();
        }
        public function insertProductos($dato){
            $idcategoria = $dato['idcategoria'];
            $nombre = $dato['nombreproducto'];
            $precio= $dato['precio'];
            $cantidad = $dato['cantidad'];
            $consulta ="INSERT INTO  tblproductos (idcategoria,nombre,precio,cantidad) VALUES ($idcategoria,'$nombre',$precio, $cantidad)";
            mysqli_query($this->bd,$consulta) or die ("error al guardar el producto");
    
        }
     
        public function consultaProductos(){
            $consulta=$this->bd->query(" SELECT p.id, c.nombre as 'categoria',p.nombre, p.precio, cantidad FROM tblproductos p INNER JOIN tblcategorias c ON p.idcategoria = c.id;");
            while($fila=$consulta->fetch_assoc()){
                $this->tblproductos[]=$fila;
            }
            return $this->tblproductos;



        }
 
   



    }
    

?>