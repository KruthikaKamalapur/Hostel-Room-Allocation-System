<?php
session_start();
if(isset($_POST["Login"])){
    $Email=$_POST["Email"];
    $Password=$_POST["Password"];
    require_once "database.php";
    $sql="SELECT * FROM register WHERE Email='$Email'";
    $result=mysqli_query($conn,$sql);
    $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $RegNo=$user['RegNo'];
    $sql1="SELECT * FROM booking WHERE RegNo='$RegNo'";
    $res2 = mysqli_query($conn, $sql1);
    if ( mysqli_num_rows($res2) > 0){
        if($user){
            if($Password==$user['Password']  && $Email==$user['Email'] ){
                echo "2 login is successful";
                $_SESSION['user'] = $user;
                header("location: Blocks/Block.php");
                exit();
            }
            
        }
        else{
            alert('Email does not match');
            //echo "<div class='alert alert-danger'>Email does not match</div>";
        }
    }
    else{
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
                    alert('Invalid user year');
                    break;
            }
            exit();
        }
        else{
            alert('Email or password is incorrect');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        body {
            background-image: url("https://zeevector.com/wp-content/uploads/Background/Blue-Abstract-Gradient-Background-with-top-ribbons.png");
            background-size: cover;
        }
        .container{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        h2{
            text-align: center;
        }
        form{
            height: auto;
            width:500px;
            color:darkblue;
            background-color: transparent;
            padding: 20px;
        }
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
            border-radius: 10px;
            background-color: transparent;
            border: 2px solid white;
            color: black;
        }
        input[type="submit"] {
            background: white;
            width: 70%;
            font-size: 2vw;
            padding: 2px;
            color: blue;
            border: none;
            font-weight:bold;
            margin-left:60px;
            border-radius: 10px;
            cursor: pointer;
        }

        .btn{
            background: green;
            width:100%;
            font-size:large;
            padding: 9px;
            margin-bottom: 3vh;
            color:white;
        }
        .navbar-collapse{
            background-color:transparent;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="font-size: 2vw;" class="navbar border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h3" style="font-size: 2.7vw;">Welcome </span>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php" style="color:white;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php" style="color:white;">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="about.php" style="color:white;">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class= "w-100 m-auto d-flex align-items-center justify-content-center pt-5 h-50 w-100" style="padding-top:10vw;">
    <form action="Login.php" method="post">
        <div class="form-group fs-1 pt-5 ">
            <h2 style=" font-size:3vw;">Student Login</h2>
            <hr>
            <label>Email</label>
            <div class="emailpwd" style="display:flex;">
                <img src="https://th.bing.com/th/id/OIP.oBpbHxLuYDAXqLKAheZkZQHaFo?rs=1&pid=ImgDetMain" alt="email" style="height:3vw;width:3vw;border-radius:50% border-color:black">
                <input type="email" class="form-control h-85 w-75 fs-1" name="Email" class="form-control" autocomplete="off" style="border-color:black">
            </div>
        </div>
        <div class="form-group fs-1 pt-5" >
            <label>Password</label>
            <div class="emailpwd" style="display:flex;">
                <img src="https://th.bing.com/th/id/OIP.zvssOFVhlvVwEBKQfO7rqQHaHa?w=512&h=512&rs=1&pid=ImgDetMain" alt="email" style="height:3vw;width:3vw;border-radius:50%">
                <input type="password" class="form-control h-85 w-75 fs-1" name="Password" class="form-control" autocomplete="new-password" style="border-color:black">
            </div>
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
