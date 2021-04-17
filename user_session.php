<!-- Including the User Header -->
<?php include("header_user.php"); ?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-3 ">
            <h2 class="lead py-2 text-center text-info">Categorias de productos</h2>
            <div class="list-group">
                <a href="index.php" class="list-group-item">Todos los productos</a>

                <?php $sql = "SELECT * FROM categorias";         
			  $result = mysqli_query($mysqli, $sql);
			  while ($row = mysqli_fetch_assoc($result))
			  { ?>
                <!-- This line will be executed as many times as there are categories in the database. -->
                <a href="index.php?id_cat=<?php echo $row['ID_CATEGORIA']; ?>"
                    class="list-group-item"><?php echo $row['NOMBRE']; ?></a>
                <?php } ?>
            </div>
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-9 mb-2">

            <div class="row">
                <?php
    if(isset($_REQUEST['id_cat'])){
        $sql_prod = "SELECT * FROM productos WHERE categoria_id=".$_REQUEST['id_cat']; 
    }else{
        $sql_prod = "SELECT * FROM productos"; 
    }
    
    $resultado_prod = mysqli_query($mysqli, $sql_prod);
    if(mysqli_num_rows($resultado_prod)>0)
    {
        while ($row_prod = mysqli_fetch_assoc($resultado_prod))
        {
        ?>
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="./img/<?php echo $row_prod['URL_FOTO']; ?>"
                                alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#"><?php echo $row_prod['NOMBRE']; ?></a>
                            </h4>
                            <h5><?php echo $row_prod['PRECIO']; ?>€</h5>
                            <p class="card-text"><?php echo $row_prod['DESCRIPCION']; ?></p>

                        </div>
                        <div class="card-footer">
                            <a class="btn btn-info" href="#">Comprar</a>
                        </div>
                    </div>
                </div>
                <?php
        }
    }else{ ?>
                <div class="col-sm-12">
                    <h2>No hay productos en esta categoría</h2>
                </div>
                <?php
    }
    ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<?php include("footer.php"); ?>