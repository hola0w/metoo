<?php
    include_once 'conexion.php';
?>
<?php
    $cantidad = 0;
    $query = "SELECT * FROM PRODUCTO";
    $stmt = $conn->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facturacion</title>

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

   
<script src="java/jquery-1.11.1.js"></script>

<link rel="stylesheet" href="css/styles.css">
</head>
  <body>  

<div style="background-color:#e5e5e500;text-align:center;">
    <h1 class="tir">FACTURAR</h1>
  </div>




        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <form action="#" method="get">
                        <div class="input-group">
                            <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                            <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                <table class="table table-list-search">
                            <thead>
                                <tr>
                             
                                    <th>COD</th>
                                    <th>DESCRIPCION</th>
                                    <th>INVENTARIO</th>
                                    <th>PRECIO</th>
                        
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($registros as $fila) : ?>
                                    <?php $cantidad=$cantidad + 1 ?>

                                <tr>
                                <td><?php echo $cantidad; ?></td>
                                    <td><?php echo $fila->codigo; ?></td>
                                    <td><?php echo $fila->descripcion; ?></td>
                                    <td><?php echo $fila->precio; ?></td>
                                    <td><?php echo $fila->cantidad; ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <tr>
                         
                                </tr>
                            </tbody>
                        </table>   
                </div>
            </div>
           <script src="java/script.js"></script>
        </div>



        <footer>

        <div class="botonesop" >
            <button class="button button2">Guarda</button>   
            <button class="button button2">Cancelar</button> 
       

        </div>
    </footer>


<div class="prductos_sleccionados">

<h1>hola</h1>
    
                                </div>

 

</body>

</html>