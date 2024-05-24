<?php
    include("database.php");
    session_start();

    $errmsg = '';

    
    if(isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $RegNo = filter_input(INPUT_POST, "RegNo", FILTER_SANITIZE_SPECIAL_CHARS);
        $RollNo = filter_input(INPUT_POST, "RollNo", FILTER_SANITIZE_SPECIAL_CHARS);
        $Name = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);
        $Gender = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_SPECIAL_CHARS);
        $Year = filter_input(INPUT_POST, "year", FILTER_SANITIZE_SPECIAL_CHARS);
        $PhoneNo = filter_input(INPUT_POST, "PhoneNo", FILTER_SANITIZE_SPECIAL_CHARS);
        $Email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_SPECIAL_CHARS);
        $Password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_SPECIAL_CHARS);

        
        if (!empty($RegNo) && !empty($RollNo) && !empty($Name) && !empty($Gender) && !empty($Year) && !empty($PhoneNo) && !empty($Email) && !empty($Password)) {
            if (!preg_match("/^\d+@student\.nitandhra\.ac\.in$/", $Email)) {
                echo "<script>alert('*Invalid email format. Email should be in the form of registrationnumber@student.nitandhra.ac.in');</script>";
            }
            else{
                $sql = "INSERT INTO register (RegNo,RollNo, Name, Gender, Year, PhoneNo, Email, Password) VALUES (?,?, ?, ?, ?, ?, ?, ?)";
                
                $stmt = mysqli_prepare($conn, $sql);
                
                if ($stmt) {
                    
                    mysqli_stmt_bind_param($stmt, "iissssss", $RegNo, $RollNo, $Name, $Gender, $Year, $PhoneNo, $Email, $Password);
                    $query = mysqli_stmt_execute($stmt);

                    if ($query) {
                        $errmsg = '*Entry successful';
                        $_SESSION['RegNo'] = $RegNo;
                        
                        if ($Gender == "male") {
                            header('Location: mhregistration.php');
                            exit;
                        } elseif ( $Year=="1") {
                            header('Location: Blocks/selectRoom.php');
                            exit;
                        }
                        elseif ( $Year=="2") {
                            header('Location: Blocks/selectRoomBhima.php');
                            exit;
                        }
                        elseif ( $Year=="3") {
                            header('Location: Blocks/selectRoomTungabhadra.php');
                            exit;
                        }
                        elseif ( $Year=="4") {
                            header('Location:Blocks/selectRoomMunneru.php');
                            exit;
                        }
                    } else {
                        $errmsg = "*Error occurred";
                    }
                    mysqli_stmt_close($stmt);
                    
                } else {
                    $errmsg = "*SQL preparation failed";
                }
            }
        } else {
            $errmsg = "*All fields are required";
        }
    }

    if ($errmsg) {
        echo $errmsg;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding:10px;
        }
        .container {
            padding: 10px;
        }
        .form-group {
            margin-bottom: 15px;
            margin-left: 150px;
        }
        .form-control {
            border-radius: 0;
            border-color: #ccc;
            font-size: 8px;
            height: 31px;
        }
        .form-control:focus {
            border-color: #85b7d9;
            box-shadow: none;
        }
        label {
            font-size: 15px;
            font-weight: bold;
            color: #333;
        }
        .btn {
            border-radius: 1vw;
            width: 30vw;
            font-size: 14px;
            font-weight: bold;
            
        }
        .navbar {
            background-color: #343a40;
            color: #fff;
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }
        .form-control{
            box-shadow: 4px 2px 2px #1987544d;
            font-size:1vw;
        }
        .form-control option{
            font-size:1.4vw;
        }
        .button1{
            text-align: center;
        }
        .heading {
            display: flex;
            align-items: center;
        }
        .heading img {
            width: 50px;
            margin-right: 10px;
        }
        .heading h1, .heading h2 {
            margin: 0;
            font-size: 24px;
        }
        .button1 {
            text-align: center;
        }
        
    </style>
</head>
<script>
    window.onload = function() {
        console.log("Clearing fields...");
        document.getElementById('Email').value = '';
        document.getElementById('Password').value = '';
    };
</script>

<body>
    <div class="heading">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8ASGE_T5Kz0gtZwAJwYUnMlCGRgdPlp_UzbIDzUnzIk_ZikQAzeIvXuTjjZIgvmMjfw&usqp=CAU" alt="logo">
        <div>
            <h1>National Institute of Technology</h1>
            <h3>Andhra Pradesh</h3>
        </div>
    </div>

    <nav class="navbar bg-body-tertiary"  class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <h2>Registration Form</h2>

            <a class="navbar-brand fs-2" href="index.php" style="padding-left:70vw; padding-top:1vw;">Home</a>
        </div>
    </nav>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <div class= "w-100 m-auto pl-3 d-flex justify-content-center flex-column mb-3 " style=" padding:4px; border: solid rgba(0, 0, 0, 0.392);">
            <div class="form-group  fs-1 pt-0 ">
                <label>Registration No : </label>
                <input type="text" class="form-control h-85 w-75 fs-1"name="RegNo" autocomplete="off">
            </div>
            <div class="form-group  fs-1 pt-0 ">
                <label>Roll No : </label>
                <input type="text" class="form-control h-85 w-75 fs-1"name="RollNo" autocomplete="off">
            </div>
            <div class="form-group fs-1 pt-0">
                <label>Name : </label>
                <input type="text" class="form-control h-85 w-75 fs-1"name="Name" autocomplete="off">
            </div>
            <div class="form-group fs-1 pt-0">
                <label>Gender : </label>
                <input type="text" class="form-control h-85 w-75 fs-1"name="gender" autocomplete="off" value="Female">
            </div>
            <div class="form-group fs-1 pt-0">
                <label>Year : </label>
                <select name="year" class="form-control h-85 w-75" required="required">
                    <option value="">Select Year</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group fs-1 pt-0">
                <label>PhoneNo</label>
                <input type="text" class="form-control h-85 w-75 fs-1"name="PhoneNo" autocomplete="off">
            </div>
            <div class="form-group fs-1 pt-0 ">
                <label>Email</label>
                <input type="email" class="form-control h-85 w-75 fs-1 " name="Email" id="Email" autocomplete="off">
            </div>
            <div class="form-group fs-1 pt-0">
                <label>Password</label>
                <input type="password" class="form-control h-85 w-75 fs-1" name="Password" id="Password" autocomplete="new-password">
            </div>
            <div class="button1"><button type="submit" class="btn btn-success fs-1  pt-3">Register</button></div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>