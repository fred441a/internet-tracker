<?php 
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$servername = $_ENV["IP"];
$username = $_ENV["USERNAME"];
$password = $_ENV["PASSWORD"];
$DBname = "SpeedTests";

$conn = new mysqli($servername, $username, $password, $DBname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  

$sql ="SELECT * FROM SpeedTests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $responsarr[] = $row;
      }

    echo json_encode($responsarr);
} else {
  echo "0 results";
}

?>