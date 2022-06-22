<?php

    $conn = new mysqli("127.0.0.1", "root", "", "dev");

    if (!$conn)
    {
        
        die("Connexion database error : " . mysqli_connect_error());
    }
    
    
?>