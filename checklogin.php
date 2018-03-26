<?php  session_start(); ?>

<?php
    require 'php/conexion.php';
    include 'php/funcs.php';

    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "laspalmas";
    $tbl_name = "usuarios";

    global $mysqli;

    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

       if(!empty($_POST))
       {
       	   $alias = $_POST['alias'];
       	   $password = $_POST['password'];

             $sql = "SELECT * FROM $tbl_name WHERE alias = '$alias'";
             $result = $conexion->query($sql);

             if ($result->num_rows > 0)
             {     
             	$row = $result->fetch_array(MYSQLI_ASSOC);

             	    if ($password= $_POST['password'])
             	     { 
             	        $_SESSION['loggedin'] = true;
             	        $_SESSION['alias'] = $alias;

             	        require './welcome.php';

                     } else { 
                     	echo "Username o Password estan incorrectos.";
                           }
             }else {
             	echo "<br><a href='login.html'>Volver a Intentarlo</a>";
               }
         }

 mysqli_close($conexion); 
 ?>

