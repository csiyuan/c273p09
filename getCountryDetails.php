<?php
include 'dbFunctions.php';

$id = $_GET['id'];
$query = "SELECT * FROM statistics WHERE id=$id";
$result = mysqli_query($link,$query);

while($row = mysqli_fetch_assoc($result)){
    $stats[] = $row;
}
mysqli_close($link);
echo json_encode($stats);
?>