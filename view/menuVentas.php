<?php require_once 'header.php'; ?>



        <h1>Ventas de productos</h1>
        <br>
        <form name="form1" method="POST" action="index.php?accion=guardarProducto">
            <p> producto:
                <select name="selcategorias">
                    <option value="">Selecione...</option>
                    <?php foreach($consultaCategorias as $datos):?>
                    <option value="<?php echo $datos['id'];?>"><?php echo $datos['nombre'];?></option>
                    <?php endforeach;?>
                </select>
           </p>
            <p>cantidad: <input type="tex" name="txtcantidad"></p>
            <p><input type="submit" name="btnguardarProducto" value="calcular venta"></p>
                
        </form>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Idventa</th>
                    <th>Categoria</th>
                    <th>Nombre Producto</th>
                    <th>Precio</th>
                    <th>cantidad</th>
                    <th>total</th>
                    <th>eliminar</th>
                </tr>
            </thead>
          
            <tbody>
                <?php foreach($consultaProductos as $dato):?>                
                <tr>

                 
                    <td><?php echo $dato['id'];?></td>
                    <td><?php echo $dato['categoria'];?></td>
                    <td><?php echo $dato['nombre'];?></td>
                    <td><?php echo $dato['precio'];?></td>
                    <td><?php echo $dato['cantidad'];?></td>
                    <td><?php echo $dato['total'];?></td>
                  
                    
                    <td><a href="./?accion=eliminarProducto&id=<?php echo $dato['id'];?>">eliminar</a></td>
                </tr>
                <?php endforeach;?>
            </tbody>
           
        </table>
    
        <br>
        <br>
        <br>
        <a href="./">Volver</a>




 <?php require_once 'footer.php'; ?>
