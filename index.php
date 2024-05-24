<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hostel Room Allocation System</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow-x: hidden; 
      font-size:larger;
      font-family: cursive, Arial, sans-serif;
      background-image: url('https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Simple-White-Pattern-Background-Image.jpg');
      background-size: cover;
    }
    .image {
      background-size: cover;
      background-position: center;
      height: calc(100vh - 150px); 
    }
    .sideimg {
      display: flex;
      justify-content: center; 
      align-items: center; 
    }
    .sideimg1, .sideimg2 {
      width: 50%;
      padding: 20px;
      text-align: center; 
    }
   
    .navbar {
      font-size: 1.5vw;
      background-color: rgba(0, 0, 0,0.05);
      color: #fff;
    }
    .footer {
      margin-top: auto;
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
    .footer p {
      margin-bottom: 7px;
    }
    .footer ul {
      list-style-type: none;
      padding: 0;
    }
    .footer ul li {
      margin-bottom: 10px;
    }
    
    
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg dark">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item p-0">
            <a class="nav-link " aria-current="page" href="#">Home</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto"> 
          <li class="nav-item p-0">
            <a class="nav-link " href="Login.php">Login</a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" href="registration.php">Register</a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link " href="about.php">About</a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link " href="admin.php">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="sideimg">
    <div class="sideimg1">
      <h1 class="hero-headline">Hostel Room Allocation System</h1> 
      <h1 class="hero-subhead">NIT-AP (B.Tech-Girls)</h1> 
    </div>
    <div class="sideimg2">
      <section class="hero carousel-hero">
        <div id="homeHerocarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeHerocarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeHerocarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeHerocarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active image" style="background-image: url('hostel_img.jpg');"></div>
            <div class="carousel-item image" style="background-image: url('hostel2.jpg');"></div>
            <div class="carousel-item image" style="background-image: url('hostel3.jpg');"></div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#homeHerocarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#homeHerocarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>