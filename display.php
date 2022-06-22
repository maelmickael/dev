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
    <title>Display</title>
</head>
<body>

    <?php
        error_reporting();

        include 'conn.php';
        include 'insert.php';

        echo ' <center>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>SUCCESS! </strong>  Welcome '. $lname .' your registered is successfully !
                    </div>
                </center> ';

        $table = ' <div class="container mt-3 mb-3">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Picture</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>BirthDay</th>
                                    <th>E-mail</th>
                                    <th>Password</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead> ';

        $show = "SELECT * FROM `devoir`";
        $result = mysqli_query($conn, $show);

        if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_assoc($result)) {
                
                $id = $row["id"];
                $img = $row["img"];
                $lname = $row["lname"];
                $fname = $row["fname"];
                $birth = $row["birth"];
                $mail = $row["mail"];
                $pwd = $row["pwd"];

                $table .= ' <tr>
                                <td>'. $id .'</td>
                                <td>'. $img .'</td>
                                <td>'. $lname .'</td>
                                <td>'. $fname .'</td>
                                <td>'. $birth .'</td>
                                <td>'. $mail .'</td>
                                <td>'. $pwd .'</td>
                                <td><a href="update.php?editid='.$id.'"class="btn btn-info">Edit</a></td>
                                <td><a href="delete.php?delid='.$id.'"class="btn btn-danger">Delete</a></td>
                            </tr> ';
            }


        }

        $table .= '     </table>
                            <div class="text-right">
                                <a href="index.php" type="submit" class="btn btn-success" name="btn">Register</a>
                            </div>
                    </div>';

        echo $table;
    
    ?>


    <!-- Boostrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>