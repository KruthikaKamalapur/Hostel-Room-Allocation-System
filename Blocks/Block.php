<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Room Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <link rel="stylesheet" type ="text/css" href="home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  
   <style>
    body{
      background-image: url('https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Simple-White-Pattern-Background-Image.jpg');
      background-size:cover;
      background-repeat:no-repeat;
    }
    .container-fluid1{
      display:flex;
      align-items:center;
      justify-content:center;
    }
    .card{
      background:transparent;
    }
       .card-img-top{
           height:20vw;
           width:20vw;
           border:1px solid black;
       }
       .img{
        width:100%;
        height:100%;
       }
       .card-body a{
        color: black;
        background-color:rgba(232, 232, 240, 0.85);
       }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="font-size: 1.5vw;" class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h3" style="font-size: 1.5vw; color:white;padding-bottom:2px;"></span>
  </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">
        <li class="nav-item p-0">
          <a class="nav-link " aria-current="page" href="../index.php" style="color:white; margin-right:0;">Home</a>
        </li>
        <li class="nav-item p-0">
          <a class="nav-link " href="../Login.php" style="color:white;">Login</a>
        </li>
        
       
        
      </ul>
      
    </div>
  </div>
</nav>
    

    
        
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
session_start();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include("../database.php");
if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add your custom CSS styles here -->
    <style>
        /* General styling */
        .container {
            max-width: 600px;
            margin: auto;
            margin-top: 40px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .profile-info {
            margin-bottom: 10px;
            display: flex;
            font-size:1vw;
        }

        .profile-info label {
            font-weight: bold;
            margin-left: 2vw;
            margin-right: 2vw;
            width: 5vw;
        }

        .php {
            border: 1px solid gray;
            padding: 3px;
            margin-right: 2vw;
            width: 30vw;
        }

        .my-profile {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: cadetblue;
            padding: 1vw;
            width: 100%;
            box-sizing: border-box;
            border-radius: 5px 5px 0 0;
        }

        .my-profile img {
            height: 8vw;
            width: 10vw;
        }

        hr.thick {
            border: none;
            height: 16px;
            background-color: black;
        }
    </style>

</head>
<body>
    
    <div class="container">
    <div class="my-profile"  style="background-color: cadetblue; ">
                        <h2 class="mt-3" style="padding: 1vw; width:50vw;">Room Details </h2> 
                        <img src="icon.jpg" style="height: 8vw; width:10vw">
                    </div>
        <hr>
        <div class="profile-info">
            <label>RegNo:</label>
            <p class="php"><?php echo $user['RegNo']; ?></p>
        </div>
        <div class="profile-info">
            <label>Name:</label>
            <p class="php"><?php echo $user['Name']; ?></p>
        </div>
        <div class="profile-info">
            <label>Gender:</label>
            <p class="php"><?php echo $user['Gender']; ?></p>
        </div>
        <div class="profile-info">
            <label>Year:</label>
            <p class="php"><?php echo $user['Year']; ?></p>
        </div>
        <?php
        $Reg=$user['RegNo'];
        $sql1 = "SELECT * FROM booking ";
        $res = mysqli_query($conn, $sql1);

        if ($res) {
            $count = mysqli_num_rows($res);
            if ($count > 0) {
                while ($rows = mysqli_fetch_assoc($res)) {
                    if ($Reg == $rows['RegNo']) {
                        // Set variables here
                        $Block = $rows['Block'];
                        $Floor = $rows['Floor'];
                        $Room = $rows['Room'];
                        $Cot = $rows['Cot'];
        ?>
        <div class="profile-info">
            <label>Block:</label>
            <p class="php"><?php echo $Block; ?></p>
        </div>
        <div class="profile-info">
            <label>Floor:</label>
            <p class="php"><?php echo $Floor; ?></p>
        </div>
        <div class="profile-info">
            <label>Room:</label>
            <p class="php"><?php echo $Room; ?></p>
        </div>
        <div class="profile-info">
            <label>Cot:</label>
            <p class="php"><?php echo $Cot; ?></p>
        </div>
        <?php
                    }
                }
            }
        }?>
        <div class="profile-info">
            <label>Phone:</label>
            <p class="php"><?php echo $user['PhoneNo']; ?></p>
        </div>
        <div class="profile-info">
            <label>Email:</label>
            <p class="php"><?php echo $user['Email']; ?></p>
        </div>
        
    </div>
</body>
</html>
<?php
} else {
    
    
    // Fetch the most recently registered user's profile
$sql="SELECT b.Block , b.Floor,b.Room,b.Cot,r.Name,r.Gender,r.Email,r.Year,r.PhoneNo,r.RegNo FROM booking b RIGHT OUTER JOIN register r on b.RegNo =r.RegNo ORDER BY r.timestamp_column DESC LIMIT 1";
$res = mysqli_query($conn, $sql);

if ($res) {
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        // Fetch the data of the most recently added record
        $row = mysqli_fetch_assoc($res);
        $RegNo = $row['RegNo'];
        $Name = $row['Name'];
        $Gender = $row['Gender'];
        $Year = $row['Year'];
        $Block= $row['Block'];
        $Floor=$row['Floor'];
        $Room=$row['Room'];
        $Cot=$row['Cot'];
        $PhoneNo = $row['PhoneNo'];
        $Email = $row['Email'];

?>


<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Booking Details</title>
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
            <!-- Add your custom CSS styles here -->
            <style>
        /* General styling */
        .container {
            max-width: 600px;
            margin: auto;
            margin-top: 40px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .profile-info {
            margin-bottom: 10px;
            display: flex;
            font-size:1vw;
        }

        .profile-info label {
            font-weight: bold;
            margin-left: 2vw;
            margin-right: 2vw;
            width: 5vw;
        }

        .php {
            border: 1px solid gray;
            padding: 3px;
            margin-right: 2vw;
            width: 30vw;
        }

        .my-profile {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: cadetblue;
            padding: 1vw;
            width: 100%;
            box-sizing: border-box;
            border-radius: 5px 5px 0 0;
        }

        .my-profile img {
            height: 8vw;
            width: 10vw;
        }

        hr.thick {
            border: none;
            height: 16px;
            background-color: black;
        }
    </style>
        </head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="font-size: 1.5vw;" class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h3" style="font-size: 1.5vw; color:white;padding-bottom:2px;"></span>
  </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">
        <li class="nav-item p-0">
          <a class="nav-link " aria-current="page" href="../index.php" style="color:white; margin-right:0;">Home</a>
        </li>
        <li class="nav-item p-0">
          <a class="nav-link " href="../Login.php" style="color:white;">Login</a>
        </li>
        
       
        
      </ul>
      
    </div>
  </div>
</nav>
    
            <div class="container">
            <div class="my-profile"  style="background-color: cadetblue; ">
                        <h2 class="mt-3" style="padding: 1vw; width:50vw;">My Profile </h2> 
                        <img src="icon.jpg" style="height: 8vw; width:10vw">
                    </div>
        <hr>
                <div class="profile-info">
                    <label>RegNo:</label>
                    <p class="php"><?php echo $RegNo ?></p>
                </div>
                <div class="profile-info">
                    <label>Name:</label>
                    <p class="php"><?php echo $Name ?></p>
                </div>
                <div class="profile-info">
                    <label>Gender:</label>
                    <p class="php"><?php echo $Gender ?></p>
                </div>
                <div class="profile-info">
                    <label>Year:</label>
                    <p class="php"><?php echo $Year ?></p>
                </div>
                <div class="profile-info">
                    <label>Block:</label>
                    <p class="php"><?php echo $Block ?></p>
                </div>
                <div class="profile-info">
                    <label>Floor:</label>
                    <p class="php"><?php echo $Floor ?></p>
                </div>
                <div class="profile-info">
                    <label>Room:</label>
                    <p class="php"><?php echo $Room ?></p>
                </div>
                <div class="profile-info">
                    <label>Cot:</label>
                    <p class="php"><?php echo $Cot ?></p>
                </div>
                <div class="profile-info">
                    <label>Phone:</label>
                    <p class="php"><?php echo $PhoneNo ?></p>
                </div>
                <div class="profile-info">
                    <label>Email:</label>
                    <p class="php"><?php echo $Email ?></p>
                </div>
            </div>
        </body>

        </html>

<?php
    } else {
        echo "No records found.";
    }
} else {
    echo "Error executing query: " . mysqli_error($conn);
}


}
?>