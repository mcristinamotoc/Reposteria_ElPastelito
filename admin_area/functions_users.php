<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/6234b7c045.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <title> Reposteria Online Creativa</title>
</head>
<body> 

<!-- The database connection file -->
<?php
require '../connection.php';

//Switch cases choose functions
if(isset($_POST["function_name"])){
    switch($_POST["function_name"]){
        case"create_users":
            create_users();
        break;
        case "modify_users":
            modify_users();
        break;
        case"delete_users":
            delete_users();
        break;
    }
}
//Function Create New Category
function create_users(){
   global $mysqli;
    $query = "INSERT INTO USUARIO ( EMAIL, NOMBRE_COMPLETO, DIRECCION, CODIGO_POSTAL, CIUDAD, PROVINCIA, TELEFONO) VALUES (";
    $query .="'" . $_POST['email'] . "', ";
    $query .="'" . $_POST['name'] . "' , ";
    $query .="'" . $_POST['direction'] . "' , ";
    $query .="'" . $_POST['code'] . "' , ";
    $query .="'" . $_POST['city'] . "' , ";
    $query .="'" . $_POST['province'] . "' , ";
    $query .="'" . $_POST['phone'] . "'); "; 
    $result = mysqli_query($mysqli, $query);
    if($result){?>
        <h4 class="text-info mx-5 my-1"><?php echo "Usuario Añadido ";?> </h4> 
<!-- Button Back to Main Page -->
<form role="form" method="post" action="admin_session.php">
    <input name="action" type="hidden" value="New">
    <button name="id" type="submit" class="btn btn-info mx-5 my-3">Volver</button>
</form>

<?php
    }else{
        echo "Error query:" . mysqli_error($mysqli);
    }
    //Closing connection database
$mysqli->close();

}
//Function Modify users
function modify_users(){
    global $mysqli;
    $query = "UPDATE USUARIO ";
    $query .= "SET ";
    $query .= "EMAIL ='" . $_POST['email']. "',";
    $query .= " NOMBRE_COMPLETO ='" . $_POST['name']. "',";
    $query .= " DIRECCION ='" . $_POST['direction']. "' ,";
    $query .= " CODIGO_POSTAL ='" . $_POST['code']. "',";
    $query .= " CIUDAD ='" . $_POST['city']. "',";
    $query .= " PROVINCIA ='" . $_POST['province']. "',";
    $query .= " TELEFONO='" . $_POST['phone']. "' ";
    $query .= " WHERE ID_USUARIO='" . $_POST['id']."'";
    $result = mysqli_query($mysqli, $query);
  
    if($result){?>
        <h4 class="text-info mx-5 my-1"><?php echo "Usuario Modificado ";?> </h4> 
<!-- Button Back to Main Page -->
<form role="form" method="post" action="admin_session.php">
    <input name="action" type="hidden" value="New">
    <button name="id" type="submit" class="btn btn-info mx-5 my-3">Volver</button>
</form>

<?php
    }else{
        echo "Error query:".mysqli_error($mysqli);
    }
    //Closing connection database
    $mysqli->close();
}

//Function Delete users
function delete_users(){
   global $mysqli;
    $query = " DELETE FROM USUARIO ";
    $query .= "WHERE ID_USUARIO={$_POST['id']}";
    $result = mysqli_query($mysqli, $query);
    if($result){?>
        <h4 class="text-info mx-5 my-1"><?php echo "Usuario Borrado ";?> </h4> 
<!-- Button Back to Main Page -->
<form role="form" method="post" action="admin_session.php">
    <input name="action" type="hidden" value="New">
    <button name="id" type="submit" class="btn btn-info mx-5 my-3">Volver</button>
</form>

<?php
    }else{
        echo "Error query:" .mysqli_error($mysqli);
    }
//Closing connection database
    $mysqli->close();
}

//Function Select users From Database
function get_users($id){
   global $mysqli;
    $query = "SELECT * FROM USUARIO WHERE ID_USUARIO = '$id'";
    $result = mysqli_query($mysqli, $query);
    $row = NULL;
    
    if($result){
        return $row = $result->fetch_assoc();
    }else{
        echo "Error query:" . mysqli_error($mysqli);
    }
    //Closing connection database
    $mysqli->close();  
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