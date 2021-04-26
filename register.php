<!-- Including the database connection file -->
<?php include("connection.php"); ?>
<?php 
      
 //Variables
 
 $email=htmlentities($_POST["emailRegister"]);
 $password=htmlentities($_POST["passwordRegister"]);
 $password2=htmlentities($_POST["passwordRegister2"]);
 $name=htmlentities($_POST["name"]);
 $direction=htmlentities($_POST["direction"]);
 $zipCode=htmlentities($_POST["zipCode"]);
 $city=htmlentities($_POST["city"]);
 $provincia=htmlentities($_POST["provincia"]);
 $phone=$htmlentities($_POST["phoneRegister"]);


 //User and password query
 $result=" INSERT INTO `USUARIO`(`EMAIL`, `PASSWORD`, `PASSWORD2`, `NOMBRE_COMPLETO`, `DIRECCION`, `CODIGO_POSTAL`, `CIUDAD`, `PROVINCIA`, `TELEFONO`) VALUES ('$email', '$password','$password2','$name','$direction','$zipCode','$city','$provincia','$phone');";

 if($query= $mysqli->query($result)){   
 if ($result) {
    echo "<div style ='color: blue' <b> Your registration was successful!</b></div>";
header ("Location:user_session.php"); 


} else {
    echo "<div style ='color:red' <b>Something went wrong. Try again.</b> </div>";
    echo $mysqli->error; 
}
 }
?>