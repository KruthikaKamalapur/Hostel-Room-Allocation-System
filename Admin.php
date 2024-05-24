<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden; 
            background-image: url('https://i.pinimg.com/originals/fd/e1/14/fde1143ce5e2a04ade0f1ed03e341273.jpg');
            background-size: cover;
        }
        .bg-body-tertiary {
            --bs-bg-opacity: 1;
            background-color: #111 !important;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;

        }
        h2 {
            text-align: center;
            font-weight: bold;
            font-size: 3vw;
            margin-bottom: 30px;
        }
        form {
    width: 500px;
    background-color: transparent;
    padding: 20px;
    border-radius: 10px;
    font-size: large;
    border: 2px solid black; /* Add border styling */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Add 3D effect */
}

        input {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        .btn {
            background: green;
            width: 60%;
            margin-left:100px;
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
            </ul>                
        </div>
    </div>
</nav>

<div class="container">
    <div class= "w-100 m-auto d-flex align-items-center justify-content-center pt-5 h-50" style="padding-top:10vw;">
        <?php
            session_start();
            if(isset($_POST["Login"])){
                $Email=$_POST["Email"];
                $Password=$_POST["Password"];
                require_once "database.php";
                if($Email=="AdminNITAP@gmail.com"&& $Password=="Admin"){
                    header("location: dashboard.php");
                }
                else{
                    echo "<script>alert('Email does not match');</script>";
                }
            }
         ?>
        <form action="Admin.php" method="post" style="border-color:black;">
            <div class="form-group fs-1 pt-5 ">
                <h2 style="font-weight:bold; font-size:2vw;">Admin Login</h2>
                <hr>
                <label>Email</label>
                <input type="Email" class="form-control h-85 w-75 fs-1" name="Email" class="form-control" autocomplete="off" style="border-color:black">
            </div>
            <div class="form-group fs-1 pt-5" >
                <label>Password</label>
                <input type="Password" class="form-control h-85 w-75 fs-1" name="Password" class="form-control" autocomplete="new-password" style="border-color:black">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="Login" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
