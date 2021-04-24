<!-- Including the database connection file -->
<?php include("connection.php"); ?>
<?php 
      
 //Variables
 $email=$_POST["emailRegister"];
 $password=$_POST["passwordRegister"];
 $password2=$_POST["passwordRegister2"];
 $name=$_POST["name"];
 $direction=$_POST["direction"];
 $zipCode=$_POST["zipCode"];
 $city=$_POST["city"];
 $provincia=$_POST["provincia"];
 $phone=$_POST["phoneRegister"];


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