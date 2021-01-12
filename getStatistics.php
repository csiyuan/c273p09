<?php
include 'dbFunctions.php';

$query = "SELECT * FROM statistics";
$result = mysqli_query($link,$query);

while($row = mysqli_fetch_assoc($result)){
    $stats[] = $row;
}
mysqli_close($link);
echo json_encode($stats);
?>