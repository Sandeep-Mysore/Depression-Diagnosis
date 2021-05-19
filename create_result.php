<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "UPMC";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql1 = "CREATE TABLE results (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
patient VARCHAR(30) NOT NULL,
score VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql1)) {
  echo "Table results created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
