<?php
include("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
      body, html {
        height: 100%;
        font-size: 1.2em;
        margin: 0;
            padding: 0;
            overflow-x: hidden; 
            background-image: url('https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Simple-White-Pattern-Background-Image.jpg');
            background-size: cover;
      }
      .d-grid {
        text-align: center;
      }

      /* Set maximum width for content */
      .container {
        margin-top:15vw;
        max-width: 1200px; /* Adjust as needed */
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
      <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#accordionSet1" aria-expanded="false" aria-controls="accordionSet1">
          Available Rooms
        </button>
        <div class="collapse" id="accordionSet1">
          <div class="accordion" id="accordionExample1">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Krishnaveni Block
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                <div class="accordion-body">
                <?php
                            $sql = "SELECT f.Floor_Name,  r.Room_Number, c.cot_no  FROM cot c 
                            JOIN room r ON c.Room_ID = r.Room_ID
                            JOIN floor f ON f.Floor_ID = r.Floor_ID
                            JOIN block b ON f.Block_ID = b.Block_ID
                            WHERE c.status ='Available' and b.Block_ID=1 ";
                            $res = mysqli_query($conn, $sql);

                            if ($res) {
                                $count = mysqli_num_rows($res);
                                echo "Number of Records: " . $count . "<br>";

                                if ($count > 0) {
                                    echo '<table class="table">';
                                    echo '<thead>';
                                    echo '<tr>';
                                    echo '<th scope="col">Floor</th>';
                                    echo '<th scope="col">Room</th>';
                                    echo '<th scope="col">Cot</th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody class="table-group-divider">';

                                    while ($rows = mysqli_fetch_assoc($res)) {
                                        echo '<tr>';
                                        echo '<td>' . htmlspecialchars($rows['Floor_Name']) . '</td>';
                                    echo '<td>' . htmlspecialchars($rows['Room_Number']) . '</td>';
                                    echo '<td>' . htmlspecialchars($rows['cot_no']) . '</td>';
                                        echo '</tr>';
                                    }
                                    
                                    

                                    echo '</tbody>';
                                    echo '</table>';
                                } else {
                                    echo "No rows found.";
                                }
                            } else {
                                echo "Error executing query: " . mysqli_error($conn);
                            }
                            ?>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Bhima
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
                <div class="accordion-body">
                <?php
                            $sql = "SELECT f.Floor_Name,  r.Room_Number, c.cot_no  FROM cot c 
                            JOIN room r ON c.Room_ID = r.Room_ID
                            JOIN floor f ON f.Floor_ID = r.Floor_ID
                            JOIN block b ON f.Block_ID = b.Block_ID
                            WHERE c.status ='Available' and b.Block_ID=2 ";
                            $res = mysqli_query($conn, $sql);

                            if ($res) {
                                $count = mysqli_num_rows($res);
                                echo "Number of Records: " . $count . "<br>";

                                if ($count > 0) {
                                    echo '<table class="table">';
                                    echo '<thead>';
                                    echo '<tr>';
                                    echo '<th scope="col">Floor</th>';
                                    echo '<th scope="col">Room</th>';
                                    echo '<th scope="col">Cot</th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody class="table-group-divider">';

                                    while ($rows = mysqli_fetch_assoc($res)) {
                                        echo '<tr>';
                                        echo '<td>' . htmlspecialchars($rows['Floor_Name']) . '</td>';
                                    echo '<td>' . htmlspecialchars($rows['Room_Number']) . '</td>';
                                    echo '<td>' . htmlspecialchars($rows['cot_no']) . '</td>';
                                        echo '</tr>';
                                    }

                                    echo '</tbody>';
                                    echo '</table>';
                                } else {
                                    echo "No rows found.";
                                }
                            } else {
                                echo "Error executing query: " . mysqli_error($conn);
                            }
                            ?>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Thungabhadra
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                <div class="accordion-body">
                <?php
                            $sql = "SELECT f.Floor_Name,  r.Room_Number, c.cot_no  FROM cot c 
                            JOIN room r ON c.Room_ID = r.Room_ID
                            JOIN floor f ON f.Floor_ID = r.Floor_ID
                            JOIN block b ON f.Block_ID = b.Block_ID
                            WHERE c.status ='Available' and b.Block_ID=3 ";
                            $res = mysqli_query($conn, $sql);

                            if ($res) {
                                $count = mysqli_num_rows($res);
                                echo "Number of Records: " . $count . "<br>";

                                if ($count > 0) {
                                    echo '<table class="table">';
                                    echo '<thead>';
                                    echo '<tr>';
                                    echo '<th scope="col">Floor</th>';
                                    echo '<th scope="col">Room</th>';
                                    echo '<th scope="col">Cot</th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody class="table-group-divider">';

                                    while ($rows = mysqli_fetch_assoc($res)) {
                                        echo '<tr>';
                                        echo '<td>' . htmlspecialchars($rows['Floor_Name']) . '</td>';
                                    echo '<td>' . htmlspecialchars($rows['Room_Number']) . '</td>';
                                    echo '<td>' . htmlspecialchars($rows['cot_no']) . '</td>';
                                        echo '</tr>';
                                    }

                                    echo '</tbody>';
                                    echo '</table>';
                                } else {
                                    echo "No rows found.";
                                }
                            } else {
                                echo "Error executing query: " . mysqli_error($conn);
                            }
                            ?>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Munneru
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample1">
                <div class="accordion-body">
                <?php
                            $sql = "SELECT f.Floor_Name,  r.Room_Number, c.cot_no  FROM cot c 
                            JOIN room r ON c.Room_ID = r.Room_ID
                            JOIN floor f ON f.Floor_ID = r.Floor_ID
                            JOIN block b ON f.Block_ID = b.Block_ID
                            WHERE c.status ='Available' and b.Block_ID=4 ";
                            $res = mysqli_query($conn, $sql);

                            if ($res) {
                                $count = mysqli_num_rows($res);
                                echo "Number of Records: " . $count . "<br>";

                                if ($count > 0) {
                                    echo '<table class="table">';
                                    echo '<thead>';
                                    echo '<tr>';
                                    echo '<th scope="col">Floor</th>';
                                    echo '<th scope="col">Room</th>';
                                    echo '<th scope="col">Cot</th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody class="table-group-divider">';

                                    while ($rows = mysqli_fetch_assoc($res)) {
                                        echo '<tr>';
                                        echo '<td>' . htmlspecialchars($rows['Floor_Name']) . '</td>';
                                    echo '<td>' . htmlspecialchars($rows['Room_Number']) . '</td>';
                                    echo '<td>' . htmlspecialchars($rows['cot_no']) . '</td>';
                                        echo '</tr>';
                                    }

                                    echo '</tbody>';
                                    echo '</table>';
                                } else {
                                    echo "No rows found.";
                                }
                            } else {
                                echo "Error executing query: " . mysqli_error($conn);
                            }
                            ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#accordionSet2" aria-expanded="false" aria-controls="accordionSet2">
          Occupied Rooms
        </button>
        <div class="collapse" id="accordionSet2">
          <div class="accordion" id="accordionExample2">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                  Krishnaveni
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                <?php
                            $sql = "SELECT f.Floor_Name,  r.Room_Number, c.cot_no  FROM cot c 
                            JOIN room r ON c.Room_ID = r.Room_ID
                            JOIN floor f ON f.Floor_ID = r.Floor_ID
                            JOIN block b ON f.Block_ID = b.Block_ID
                            WHERE c.status ='booked' and b.Block_ID=1 ";
                            $res = mysqli_query($conn, $sql);

                            if ($res) {
                                $count = mysqli_num_rows($res);
                                echo "Number of Records: " . $count . "<br>";

                                if ($count > 0) {
                                    echo '<table class="table">';
                                    echo '<thead>';
                                    echo '<tr>';
                                    echo '<th scope="col">Floor</th>';
                                    echo '<th scope="col">Room</th>';
                                    echo '<th scope="col">Cot</th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody class="table-group-divider">';

                                    while ($rows = mysqli_fetch_assoc($res)) {
                                        echo '<tr>';
                                        echo '<td>' . htmlspecialchars($rows['Floor_Name']) . '</td>';
                                        echo '<td>' . htmlspecialchars($rows['Room_Number']) . '</td>';
                                        echo '<td>' . htmlspecialchars($rows['cot_no']) . '</td>';
                                        echo '<td>';
                                
                                        $floorValue = ($rows['Floor_Name'] == 'G') ? 1 : (($rows['Floor_Name'] == 'F') ? 2 : 3);
                                        
                                        $roomId = '1' . $floorValue . $rows['Room_Number'] . $rows['cot_no'];
                                        echo '<a href="deleteroom.php?id=' . urlencode($roomId) . '" class="btn btn-danger">Delete Room</a>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }

                                    echo '</tbody>';
                                    echo '</table>';
                                } else {
                                    echo "No rows found.";
                                }
                            } else {
                                echo "Error executing query: " . mysqli_error($conn);
                            }
                            ?>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Bhima
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                <?php
                            $sql = "SELECT f.Floor_Name,  r.Room_Number, c.cot_no  FROM cot c 
                            JOIN room r ON c.Room_ID = r.Room_ID
                            JOIN floor f ON f.Floor_ID = r.Floor_ID
                            JOIN block b ON f.Block_ID = b.Block_ID
                            WHERE c.status ='booked' and b.Block_ID=2 ";
                            $res = mysqli_query($conn, $sql);

                            if ($res) {
                                $count = mysqli_num_rows($res);
                                echo "Number of Records: " . $count . "<br>";

                                if ($count > 0) {
                                    echo '<table class="table">';
                                    echo '<thead>';
                                    echo '<tr>';
                                    echo '<th scope="col">Floor</th>';
                                    echo '<th scope="col">Room</th>';
                                    echo '<th scope="col">Cot</th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody class="table-group-divider">';

                                    while ($rows = mysqli_fetch_assoc($res)) {
                                        echo '<tr>';
                                        echo '<td>' . htmlspecialchars($rows['Floor_Name']) . '</td>';
                                        echo '<td>' . htmlspecialchars($rows['Room_Number']) . '</td>';
                                        echo '<td>' . htmlspecialchars($rows['cot_no']) . '</td>';
                                        echo '<td>';
                                
                                        $floorValue = ($rows['Floor_Name'] == 'G') ? 1 : (($rows['Floor_Name'] == 'F') ? 2 : 3);
                                        
                                        $roomId = '2' . $floorValue . $rows['Room_Number'] . $rows['cot_no'];
                                        echo '<a href="deleteroom.php?id=' . urlencode($roomId) . '" class="btn btn-danger">Delete Room</a>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }

                                    echo '</tbody>';
                                    echo '</table>';
                                } else {
                                    echo "No rows found.";
                                }
                            } else {
                                echo "Error executing query: " . mysqli_error($conn);
                            }
                            ?>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  Thungabhadra
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                <?php
                            $sql = "SELECT f.Floor_Name,  r.Room_Number, c.cot_no  FROM cot c 
                            JOIN room r ON c.Room_ID = r.Room_ID
                            JOIN floor f ON f.Floor_ID = r.Floor_ID
                            JOIN block b ON f.Block_ID = b.Block_ID
                            WHERE c.status ='booked' and b.Block_ID=3 ";
                            $res = mysqli_query($conn, $sql);

                            if ($res) {
                                $count = mysqli_num_rows($res);
                                echo "Number of Records: " . $count . "<br>";

                                if ($count > 0) {
                                    echo '<table class="table">';
                                    echo '<thead>';
                                    echo '<tr>';
                                    echo '<th scope="col">Floor</th>';
                                    echo '<th scope="col">Room</th>';
                                    echo '<th scope="col">Cot</th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody class="table-group-divider">';

                                    while ($rows = mysqli_fetch_assoc($res)) {
                                        echo '<tr>';
                                        echo '<td>' . htmlspecialchars($rows['Floor_Name']) . '</td>';
                                        echo '<td>' . htmlspecialchars($rows['Room_Number']) . '</td>';
                                        echo '<td>' . htmlspecialchars($rows['cot_no']) . '</td>';
                                        echo '<td>';
                                
                                        $floorValue = ($rows['Floor_Name'] == 'G') ? 1 : (($rows['Floor_Name'] == 'F') ? 2 : 3);
                                        
                                        $roomId = '3' . $floorValue . $rows['Room_Number'] . $rows['cot_no'];
                                        echo '<a href="deleteroom.php?id=' . urlencode($roomId) . '" class="btn btn-danger">Delete Room</a>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }

                                    echo '</tbody>';
                                    echo '</table>';
                                } else {
                                    echo "No rows found.";
                                }
                            } else {
                                echo "Error executing query: " . mysqli_error($conn);
                            }
                            ?>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  Munneru
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                <?php
                            $sql = "SELECT f.Floor_Name,  r.Room_Number, c.cot_no  FROM cot c 
                            JOIN room r ON c.Room_ID = r.Room_ID
                            JOIN floor f ON f.Floor_ID = r.Floor_ID
                            JOIN block b ON f.Block_ID = b.Block_ID
                            WHERE c.status ='booked' and b.Block_ID=4";
                            $res = mysqli_query($conn, $sql);

                            if ($res) {
                                $count = mysqli_num_rows($res);
                                echo "Number of Records: " . $count . "<br>";

                                if ($count > 0) {
                                    echo '<table class="table">';
                                    echo '<thead>';
                                    echo '<tr>';
                                    echo '<th scope="col">Floor</th>';
                                    echo '<th scope="col">Room</th>';
                                    echo '<th scope="col">Cot</th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody class="table-group-divider">';

                                    while ($rows = mysqli_fetch_assoc($res)) {
                                        echo '<tr>';
                                        echo '<td>' . htmlspecialchars($rows['Floor_Name']) . '</td>';
                                        echo '<td>' . htmlspecialchars($rows['Room_Number']) . '</td>';
                                        echo '<td>' . htmlspecialchars($rows['cot_no']) . '</td>';
                                        echo '<td>';
                                
                                        $floorValue = ($rows['Floor_Name'] == 'G') ? 1 : (($rows['Floor_Name'] == 'F') ? 2 : 3);
                                        
                                        $roomId = '4' . $floorValue . $rows['Room_Number'] . $rows['cot_no'];
                                        echo '<a href="deleteroom.php?id=' . urlencode($roomId) . '" class="btn btn-danger">Delete Room</a>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                    echo '</tbody>';
                                    echo '</table>';
                                } else {
                                    echo "No rows found.";
                                }
                            } else {
                                echo "Error executing query: " . mysqli_error($conn);
                            }
                            ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
