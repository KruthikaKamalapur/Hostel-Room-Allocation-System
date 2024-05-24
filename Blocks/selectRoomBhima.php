<?php
include("../database.php");
session_start(); 

$errmsg = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $RegNo = filter_input(INPUT_POST, "RegNo", FILTER_SANITIZE_SPECIAL_CHARS);
    $Block = filter_input(INPUT_POST, "Block", FILTER_SANITIZE_SPECIAL_CHARS);
    $Floor = filter_input(INPUT_POST, "Floor", FILTER_SANITIZE_SPECIAL_CHARS);
    $Room = filter_input(INPUT_POST, "Room", FILTER_SANITIZE_SPECIAL_CHARS);
    $Cot = filter_input(INPUT_POST, "Cot", FILTER_SANITIZE_SPECIAL_CHARS);
    
    
    $sql = "SELECT * FROM booking WHERE RegNo = '$RegNo'";
    $res = mysqli_query($conn, $sql);
    
    if ($res) {
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            $errmsg = "User with registration number $RegNo has already booked a room.";
            echo "Already Booked";
           
        }
    }

    if (empty($errmsg)) {
        $sql = "SELECT * FROM booking ";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            $count = mysqli_num_rows($res);
            if ($count > 0) {
                while ($rows = mysqli_fetch_assoc($res)) {
                    if ($RegNo == $rows['RegNo']) {
                        alert("Already Booked");
                    } else {
                        if ($Floor == 'Ground') {
                            $var = '21';
                        } else if ($Floor == 'First') {
                            $var = '22';
                        } else if ($Floor == 'Second') {
                            $var = '23';
                        }
                        $cotId = $var . $Room . $Cot;
                        
                        if (isset($_SESSION['user'])) {
                            $user = $_SESSION['user'];
                            $Reg = $user['RegNo'];
                        } else {
                            $sql = "SELECT * FROM register ORDER BY timestamp_column DESC LIMIT 1";
                            $res = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($res);
                            $Reg = $row['RegNo'];
                        }
                        $sql1 = "SELECT * FROM cot ";

                        if (!empty($RegNo) && $Reg == $RegNo) {

                            if (!empty($RegNo) && $Reg == $RegNo && !empty($Block) && !empty($Floor) && !empty($Room) && !empty($Cot)) {
                                $sql1 = "SELECT * FROM cot WHERE Cot_ID = CONCAT('$var','$Room','$Cot')";
                                $result1 = mysqli_query($conn, $sql1);
                                $user1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
                                $Status = $user1['Status'];
                                if ($Status == 'booked') {
                                    echo "Room Not Available";
                                } else {
                                    $sql = "INSERT INTO booking (RegNo, Block, Floor, Room, Cot) VALUES (?, ?, ?, ?, ?)";
                                    $updateCotSql = "UPDATE cot
                                             SET Status = 'booked'
                                             WHERE Cot_ID = CONCAT('$var','$Room','$Cot')";


                                    $stmt1 = mysqli_prepare($conn, $updateCotSql);
                                    $query = mysqli_stmt_execute($stmt1);
                                    $stmt = mysqli_prepare($conn, $sql);

                                    if ($stmt) {
                                        mysqli_stmt_bind_param($stmt, "sssii", $RegNo, $Block, $Floor, $Room, $Cot);
                                        $query = mysqli_stmt_execute($stmt);

                                        if ($query) {
                                            $errmsg = '*Entry successful';
                                            $_SESSION['RegNo'] = $RegNo;
                                            
                                            header("location: Block.php");
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
                        } else {
                            echo "Enter correct Reg No";
                        }

                        if ($errmsg) {
                            echo $errmsg;
                        }
                        echo $cotId;
                    }
                }
            }
        }
    }
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
            font-size:1vw;
        }
        .container {
            padding: 10px;
        }
        .form-group {
            margin-bottom: 20px;
            margin-left: 150px;
        }
        .form-control {
            border-radius: 0;
            border-color: #ccc;
            font-size: 15px;
            height: 31px;
        }
        .form-control:focus {
            border-color: #85b7d9;
            box-shadow: none;
        }
        label {
            font-size: 19px;
            font-weight: bold;
            color: #333;
        }
        .btn {
            border-radius: 1vw;
            width: 20vw;
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
            box-shadow: 4px 2px 2px #1987544d;;
        }
        .form-control option{
            font-size:1vw;
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
        .accordion{
            width:75vw;
            padding-left:10vw;
        }
        .accordion-button{
            font-size:1.2vw;
        }
    </style>
</head>

<body>
<h2 style="font-weight:bold; text-align:center; font-size:2vw; background-color:blue; color:white;">Select Your Room</h2>
    <nav class="navbar bg-body-tertiary" class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="../index.php">Home</a>
        </div>
    </nav>
    <form id="myForm" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <div class="w-100 m-auto pl-3 d-flex justify-content-center flex-column mb-3 ">
            <div class="form-group fs-1 pt-0 ">
                <label>RegNo : </label>
                <input type="text" class="form-control h-85 w-75 fs-1" name="RegNo" autocomplete="off">
            </div>
            <div class="form-group fs-1 pt-0">
                <label>Block Name : </label>
                <input type="text" class="form-control h-85 w-75 fs-1" name="Block" autocomplete="off" value="Bhima">
            </div>
            <div class="form-group fs-1 pt-0">
                <label>Floor Name : </label>
                <select name="Floor" class="form-control h-85 w-75" required="required">
                    <option value="">Select Floor</option>
                    <option value="Ground">Ground</option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                </select>
            </div>
            <div class="form-group fs-1 pt-0">
                <label>Room No : </label>
                <select name="Room" class="form-control h-85 w-75" required="required">
                    <option value="">Select Room No</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    
                    

                </select>
            </div>
            <div class="form-group fs-1 pt-0">
                <label>Cot No : </label>
                <select name="Cot" class="form-control h-85 w-75" required="required">
                    <option value="">Select Cot No</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    
                </select>
            </div>

        </div>
        <a style="margin-left:35vw"><b>CHECK OUT THE AVAILABLE ROOMS</b></a>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Ground
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse showzzzzzzzz" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php
                        $sql = "SELECT c.cot_no, c.status, r.Room_Number FROM cot c 
                        JOIN room r ON c.Room_ID = r.Room_ID
                        JOIN floor f ON f.Floor_ID = r.Floor_ID
                        JOIN block b ON f.Block_ID = b.Block_ID
                        WHERE c.status ='Available' and b.Block_ID=2 and f.Floor_Name='G'";
                        $res = mysqli_query($conn, $sql);

                        if ($res) {
                            $count = mysqli_num_rows($res);
                            echo "Number of rows: " . $count . "<br>";

                            if ($count > 0) {
                                echo '<table class="table">';
                                echo '<thead>';
                                echo '<tr>';
                                
                                echo '<th scope="col">RoomNo</th>';
                                echo '<th scope="col">CotNo</th>';
                                echo '<th scope="col">Status</th>';
                                echo '</tr>';
                                echo '</thead>';
                                echo '<tbody class="table-group-divider">';

                                while ($rows = mysqli_fetch_assoc($res)) {
                                    echo '<tr>';
                                    
                                    echo '<td>' . htmlspecialchars($rows['Room_Number']) . '</td>';
                                echo '<td>' . htmlspecialchars($rows['cot_no']) . '</td>';
                                echo '<td>' . htmlspecialchars($rows['status']) . '</td>';
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
                        First
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <?php
                        $sql = "SELECT c.cot_no, c.status, r.Room_Number FROM cot c 
                        JOIN room r ON c.Room_ID = r.Room_ID
                        JOIN floor f ON f.Floor_ID = r.Floor_ID
                        JOIN block b ON f.Block_ID = b.Block_ID
                        WHERE c.status ='Available' and b.Block_ID=2 and f.Floor_Name='F'";
                        $res = mysqli_query($conn, $sql);

                        if ($res) {
                            $count = mysqli_num_rows($res);
                            echo "Number of rows: " . $count . "<br>";

                            if ($count > 0) {
                                echo '<table class="table">';
                                echo '<thead>';
                                echo '<tr>';
                                
                                echo '<th scope="col">RoomNo</th>';
                                echo '<th scope="col">CotNo</th>';
                                echo '<th scope="col">Status</th>';
                                echo '</tr>';
                                echo '</thead>';
                                echo '<tbody class="table-group-divider">';

                                while ($rows = mysqli_fetch_assoc($res) ) {
                                    echo '<tr>';
                                    
                                    echo '<td>' . htmlspecialchars($rows['Room_Number']) . '</td>';
                                echo '<td>' . htmlspecialchars($rows['cot_no']) . '</td>';
                                echo '<td>' . htmlspecialchars($rows['status']) . '</td>';
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
                        Second
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <?php
                        $sql = "SELECT c.cot_no, c.status, r.Room_Number FROM cot c 
                        JOIN room r ON c.Room_ID = r.Room_ID
                        JOIN floor f ON f.Floor_ID = r.Floor_ID
                        JOIN block b ON f.Block_ID = b.Block_ID
                        WHERE c.status ='Available' and b.Block_ID=2  and f.Floor_Name='S'";
                        $res = mysqli_query($conn, $sql);

                        if ($res) {
                            $count = mysqli_num_rows($res);
                            echo "Number of rows: " . $count . "<br>";

                            if ($count > 0) {
                                echo '<table class="table">';
                                echo '<thead>';
                                echo '<tr>';
                                echo '<th scope="col">RoomNo</th>';
                                echo '<th scope="col">CotNo</th>';
                                echo '<th scope="col">Status</th>';
                                echo '</tr>';
                                echo '</thead>';
                                echo '<tbody class="table-group-divider">';

                                while ($rows = mysqli_fetch_assoc($res)) {
                                    echo '<tr>';
                                    echo '<td>' . htmlspecialchars($rows['Room_Number']) . '</td>';
                                echo '<td>' . htmlspecialchars($rows['cot_no']) . '</td>';
                                echo '<td>' . htmlspecialchars($rows['status']) . '</td>';
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
        <div class="button1"><button type="submit" class="btn btn-success fs-1  pt-3">submit</button></div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
