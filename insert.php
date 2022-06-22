<?php

    error_reporting(0);

    $img = $_POST["img"];
    $lname = $_POST["lname"];
    $fname = $_POST["fname"];
    $birth = $_POST["birth"];
    $mail = $_POST["mail"];
    $pwd = $_POST["pwd"];
    $btn = $_POST["btn"];


    if (!empty($img) && !empty($lname) && !empty($fname) && !empty($birth) && !empty($mail) && !empty($pwd)) {

        if (isset($btn)) {
            
            $inser = "INSERT INTO `devoir`(`id`, `img`, `lname`, `fname`, `birth`, `mail`, `pwd`)
                        VALUES
                        ('','$img','$lname','$fname','$birth','$mail','$pwd')";
            $result = mysqli_query($conn, $inser);

            if (!$result) {
                
                echo "Recording " . $inser . mysqli_error($conn);
            }else {
                header('Location: display.php');
            }
        }
        
    }

?>