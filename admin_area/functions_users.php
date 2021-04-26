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
    if($result){
        echo "USUARIO Añadido";?>
<a href="admin_session.php">LIST USUARIOS</a>
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
   echo $query;
  
    if($result){
        echo "Modified users";?>
<a href="admin_session.php">LIST USUARIOS</a>
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
    echo $query;
   
    if($result){
        echo "users deleted";?>
<a href="admin_session.php">LIST USUARIOS</a> <br>
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