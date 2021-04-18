<?php include("connection.php"); ?>
<?php 
      
 //Variables
 $email=$_POST["emailLogin"];
 $password=$_POST["passwordLogin"];

 //ADMIN Query
 $result="SELECT EMAIL PASSWORD FROM ADMIN
 WHERE EMAIL='$email' and PASSWORD='$password'";

 if($query= $mysqli->query($result)){
 $row=$query->fetch_array(); 
 $nr =$query->num_rows; 

 //If the user is the admin he will be redirect to to the Admin Session 
 if($nr == 1){ 
   header ("Location:admin_area/admin_session.php"); 
 }
 }
 else{
 echo $mysqli->error;  
 }

//USER Query
$result2 ="SELECT EMAIL PASSWORD FROM USUARIO
WHERE EMAIL='$email' and PASSWORD='$password'";

 if($query= $mysqli->query($result2)){
  $row=$query->fetch_array(); 
  $nr =$query->num_rows; 
 
  //If the user exists he will be redirected to the User Session 
  if($nr == 1){ 
    header ("Location:user_session.php"); 
  }
 
  //If the user or password is incorrect, error message
  else if($nr <= 0) { 
  echo "<div style ='color:red' <b>The user name or password is incorrect. Try again.</b> </div>";?>
<a href="index.php">Back</a><?php
  }  
  }
  else{
  echo $mysqli->error;  
  }

?>