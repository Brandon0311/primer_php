<?php
    function conectar()
    {
        $user= "root";
        $pass= "";
        $server="localhost";
        $db= "probando";
        $con=mysqli_connect($server,$user,"",$db) or die(mysql_error());
        return $con; 

    }
    

?>