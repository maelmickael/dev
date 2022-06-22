<?php

    include 'conn.php';
    include 'insert.php';

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTRAP CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font_awesome/css/all.min.css">
    <title>Registration</title>
    <style>
        .global{
            width: 15rem;
            height: 15rem;
            overflow: hidden;
        }

        .global span{
            width: 100%;
            height: 100%;
        }

        span img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
</head>
<body>
    
    <!-- Form -->
    <form action="" method="post" class="was-validated">

        <!-- Form container -->
        <div class="container mb-3 mt-3" style="width: 600px;">

            <!-- Card PictureS -->
            <center>
            <div class="global card mt-3 mb-3">
                <label style="cursor:pointer;" for="myImg" ><img id="frame" class="card-img-top" src="img/camera.png" alt="card-img"></label>
                <div class="card-body pos">
                    <div class="d-grid">
                        <input class="form-control" type="file" name="img" onchange="preview()" style="display:none; visibility:none;" id="myImg" required>
                    </div>
                </div>
            </div>
            </center>

            <!-- Input name -->
            <div class="row mb-3">
                <div class="col">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" name="lname" placeholder="Last Name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" name="fname" placeholder="First Name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
            </div>

            <!-- input birth -->
            <div class="row mb-3">
                <div class="input-group">
                    <input class="form-control form-control-lg" type="date" name="birth" id="" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <!-- Input identity -->
            <div class="row mb-3">
                <div class="col">
                    <div class="input-group">
                        <input type="email" class="form-control form-control-lg" name="mail" placeholder="Email" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <input type="password" name="pwd" class="form-control form-control-lg" placeholder="Password" data-toggle="password" required>
                        <span class="input-group-text">
                            <i class="fa fa-eye"></i>
                        </span>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
            </div>

           

            <!-- Btn -->
            <div class="mb-3">
                <button type="submit" class="btn btn-success" name="btn">Register</button>
            </div>
        </div>
    </form>


    <!-- Boostrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>

    <!-- Image display -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/showImg.js"></script>
    <script src="js/bootstrap-show-password.js"></script>

</body>
</html>