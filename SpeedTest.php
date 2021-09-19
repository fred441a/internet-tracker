<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$servername = $_ENV["IP"];
$username = $_ENV["USERNAME"];
$password = $_ENV["PASSWORD"];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  echo $conn->connect_error;
  die("Connection failed: " . $conn->connect_error);
}

function query($query, $conn)
{
  if ($conn->query($query) != TRUE) {
    echo "Error creating Table: " . $conn->error;
  }
}

//Setup DB
$sql = "CREATE DATABASE IF NOT EXISTS SpeedTests ";

query($sql, $conn);

//Connect to DB
$DBname = "SpeedTests";
$conn = new mysqli($servername, $username, $password, $DBname);

//Setup Table
$sql = "CREATE TABLE IF NOT EXISTS SpeedTests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
download FLOAT NOT NULL,
upload FLOAT NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

query($sql, $conn);

$SpeedTest = json_decode(shell_exec("speedtest-cli --json"));

if ($SpeedTest->download != null) {
  $speedrespons->download = $SpeedTest->download;
} else {
  $speedrespons->download = 0;
}

if ($SpeedTest->upload != null) {
  $speedrespons->upload = $SpeedTest->upload;
} else {
  $speedrespons->upload = 0;
}

$stmt = $conn->prepare("INSERT INTO SpeedTests (download, upload) VALUES (?, ?)");
$stmt->bind_param("dd", $speedrespons->download, $speedrespons->upload);
$stmt->execute();

echo  json_encode($speedrespons);

$conn->close();
