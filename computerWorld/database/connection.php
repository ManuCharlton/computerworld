


<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";

$dbname = "computer_world";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT `id`, `name`, `surname`, `age`, `product`, `address` FROM `client_information` WHERE 1";
?>


