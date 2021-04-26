<!-- Including the Functions categories file -->
<?php include ("functions_users.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>ADMIN AREA</title>
</head>

<body>
    <!-- Title -->
    <div class="jumbotron text-center p-3 my-3 border">
        <h2 class="text-info">ADMIN AREA</h2>
    </div>
    <?php
     //Error control
     if(!isset($_POST["action"])){
        echo "Error: Action undefined"?> <br>
    <a href="admin_session.php">Back</a>
    <?php exit();
    }
    if(!isset ($_POST["id"])){
        echo"Error: ID undefined";?> <br>
    <a href="admin_session.php">Back</a>
    <?php exit();
    }?>
    <!-- Container -->
    <div class="container" mx-3 my-1>
        <?php
    echo "Action: " .$_POST["action"]."<br>";
    echo "Id users: " .$_POST["id"]."<br>";?>
    </div><?php
   
//Based on the selected action, it calls one function or the other 
switch($_POST["action"]){
    case "New":
        createFormUsers();
    break;
    case "Modify":
        modifyFormUsers();
    break;
    case "Delete";
        deleteFormUsers();
break;
}
//Show interface with empty fields to create a new product
function createFormUsers(){?>
    <div class="container p-3 my-3 border">
        <div class="text-info mx-5"> Añadir Usuario</div>
        <form action="functions_users.php" method="post">
            <input type="hidden" name="function_name" value="create_users">
            <div class="form-group">
                <label for="id">Id:</label>
                <input type="text" class="form-control" placeholder="Enter id" name="id" >
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-group">
                <label for="name">Nombre Completo:</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" required>
            </div>
            <div class="form-group">
                <label for="direction">Dirección:</label>
                <input type="text" class="form-control" placeholder="Enter direction" name="direction" required>
            </div>
            <div class="form-group">
                <label for="code">Codigo Postal:</label>
                <input type="text" class="form-control" placeholder="Enter code" name="code" required>
            </div>
            <div class="form-group">
                <label for="city">Ciudad:</label>
                <input type="text" class="form-control" placeholder="Enter city" name="city"required>
            </div>
            <div class="form-group">
                <label for="province">Provincia:</label>
                <input type="text" class="form-control" placeholder="Enter province" name="province"required>
            </div>
            <div class="form-group">
                <label for="phone">Telefono:</label>
                <input type="text" class="form-control" placeholder="Enter phone" name="phone" required>
            </div>
            <button type="submit" class="btn btn-info">Guardar</button>
        </form>
    </div>
    <?php
}
//Show fields to modify the product.
function modifyFormUsers(){
    $users = get_users($_POST['id']);?>
    <div class="container p-3 my-3 border">
        <div class="text-info mx-5"> Modificar Registro</div>
        <form action="functions_users.php" method="post">
            <input type="hidden" name="function_name" value="modify_users">
            <input type="hidden" name="id" value="<?php echo $users['ID_USUARIO']?>" required>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="<?php echo $users['EMAIL']?>" required>
            </div>
            <div class="form-group">
                <label for="name">Nombre Completo:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $users['NOMBRE_COMPLETO']?>" required>
            </div>
            <div class="form-group">
                <label for="direction">Dirección:</label>
                <input type="text" class="form-control" name="direction" value="<?php echo $users['DIRECCION']?>"
                    required>
            </div>
            <div class="form-group">
                <label for="code">CODIGO POSTAL:</label>
                <input type="text" class="form-control" name="code" value="<?php echo $users['CODIGO_POSTAL']?>" required>
            </div>
            <div class="form-group">
                <label for="city">Ciudad:</label>
                <input type="text" class="form-control" name="city" value="<?php echo $users['CIUDAD']?>"
                    required>
            </div>
            <div class="form-group">
                <label for="province">Provincia:</label>
                <input type="text" class="form-control" name="province" value="<?php echo $users['PROVINCIA']?>"
                    required>
            </div>
            <div class="form-group">
                <label for="phone">TELEFONO:</label>
                <input type="text" class="form-control" name="phone" value="<?php echo $users['TELEFONO']?>"
                    required>
            </div>
            <button type="submit" class="btn btn-info">Guardar</button>
        </form>
    </div>
    <?php
}
//Show fields to delete the product
function deleteFormUsers(){?>
    <!-- <div class="text-primary mx-5"> Delete register</div> -->
    <form action="functions_users.php" method="post">
        <input type="hidden" name="function_name" value="delete_users">
        <input type="hidden" name="id" value="<?php echo $_POST['id']?>">
        <label class="lead font-weight-bolder text-danger mx-5" for="isDeleteusers">¿Estás seguro de borrar el usuario?</label>
        <input class="btn btn-info" type="submit" value="SI">
        <a href="admin_session.php" class="btn btn-info mx-3" role="button">NO</a>
    </form>
    <?php
}?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js "
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js "
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous ">
    </script>
</body>

</html>