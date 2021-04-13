<!-- Including the database connection file -->
<?php include("connection.php"); ?>
<?php 
      
 //Variables
 $email=$_POST["emailLogin"];
 $password=$_POST["passwordLogin"];

 //User and password query
 $result="SELECT EMAIL PASSWORD FROM ADMIN
 WHERE EMAIL='$email' and PASSWORD='$password'";
 if($query= $mysqli->query($result)){
 $row=$query->fetch_array(); 
 $nr =$query->num_rows; 

 //If the user exists he will be redirected to the Admin Session 
 if($nr == 1){ 
   header ("Location:admin_session.php"); 
 }

 //If the user or password is incorrect, error message
 else if($nr <= 0) { 
 echo "<div style ='color:red' <b>The user name or password is incorrect. Try again.</b> </div>";
 }  
 }
 else{
 echo $mysqli->error;  
 }
?>