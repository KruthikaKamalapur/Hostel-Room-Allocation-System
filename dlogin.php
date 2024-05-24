<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden; 
            background-image: url('https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Simple-White-Pattern-Background-Image.jpg');
            background-size: cover;
        }
        .bg-body-tertiary {
            --bs-bg-opacity: 1;
            background-color: #111 !important;
        }
        .container {
            position: relative;
            height: 100vh;
        }

        form {
            position: absolute;
            top: 50%;
            left: 47%;
            transform: translate(-50%, -50%);
            width: 400px;
            background-color: #f8f9fa;
            box-shadow: 2px 2px 5px rgba(0,0.1,0.1,0.25);
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            font-weight: bold;
            font-size: 3vw;
            margin-bottom: 30px;
        }

        input {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        .btn {
            background: green;
            width: 100%;
            font-size: large;
            padding: 10px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="font-size: 1.5vw;" class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h3" style="font-size: 1.5vw;">Welcome </span>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">
                    <li class="nav-item p-0">
                    <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item p-0">
                    <a class="nav-link" href="registration.php">Register</a>
                    </li>
                    <li class="nav-item p-0">
                    <a class="nav-link " href="about.php">About</a>
                    </li>
                    
                </ul>
                
                </div>
            </div>
    </nav>
    <div class= "w-100 m-auto d-flex align-items-center justify-content-center pt-5 h-50 w-100" style="padding-top:10vw;">
    <?php
session_start();

if (isset($_POST["Login"])) {
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    require_once "database.php";

    // Fetch student details by email
    $sql1 = "SELECT * FROM register WHERE Email='$Email'";
    $res1 = mysqli_query($conn, $sql1);

    if ($res1) {
        $user = mysqli_fetch_assoc($res1);
        $RegNo = $user['RegNo'];

        // Check if the student has a room booking
        $sql2 = "SELECT * FROM booking WHERE RegNo='$RegNo'";
        $res2 = mysqli_query($conn, $sql2);

        if ($res2 && mysqli_num_rows($res2) > 0) {
            // Student has a room booking, redirect to room details page
            header("Location: Blocks/Bhima.php");
            exit();
        } else {
            // No room booking found, check login credentials
            if ($user && $Password == $user['Password']) {
                // Password matches, redirect based on student's year
                switch ($user['Year']) {
                    case "1":
                        header("Location: Blocks/selectRoom.php");
                        break;
                    case "2":
                        header("Location: Blocks/selectRoomBhima.php");
                        break;
                    case "3":
                        header("Location: Blocks/selectRoomTungabhadra.php");
                        break;
                    case "4":
                        header("Location: Blocks/selectRoomMunneru.php");
                        break;
                    default:
                        echo "<script>alert('Invalid user year');</script>";
                        break;
                }
                exit();
            } else {
                // Password doesn't match or user not found
                echo "<script>alert('Email or Password does not match');</script>";
                echo "<div class='alert alert-danger'>Email or Password does not match</div>";
            }
        }
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
}
?>
        <form action="Login.php" method="post">
        <div class="form-group fs-1 pt-5 ">
            <h2 style="font-weight:bold; font-size:2vw;">Login</h2>
            <hr>
            <label>Email</label>
            <input type="Email" class="form-control h-85 w-75 fs-1"name="Email" class="form-control" autocomplete="off">
        </div>
        <div class="form-group fs-1 pt-5" >
            <label>Password</label>
            <input type="Password" class="form-control h-85 w-75 fs-1"name="Password" class="form-control" autocomplete="new-password">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="Login" class="btn btn-primary">

        </div>


        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php

?>