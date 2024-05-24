<?php
include("database.php");
$roomId = $_GET['id'];
$sql = "UPDATE cot SET Status='Available' WHERE Cot_ID = $roomId";
$result = mysqli_query($conn, $sql);
if(!$result) {
    echo "Error: " . mysqli_error($conn);
} else {
    echo "Update successful!";
}
?>
