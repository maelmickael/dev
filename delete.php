<?php

    include 'conn.php';
    $id = $_GET["delid"];

    $del = " DELETE FROM `devoir` WHERE `id`= '$id' ";
    $task = mysqli_query($conn, $del);

    if ($task) {
        
       header('Location: display.php');
    }

?>