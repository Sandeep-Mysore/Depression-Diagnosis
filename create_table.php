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
$sql1 = "CREATE TABLE myPatients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) UNIQUE NOT NULL,
gender VARCHAR(50) NOT NULL,
race VARCHAR(50) NOT NULL,
age INT(6) NOT NULL,
phone_no INT(15) NOT NULL,
prev_diag VARCHAR(50) NOT NULL
)";

$sql2 = "CREATE TABLE admins (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL
)";

$sql3 = "CREATE TABLE questions (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
question VARCHAR(30) NOT NULL,
option1 VARCHAR(30) NOT NULL,
option2 VARCHAR(50) NOT NULL,
option3 VARCHAR(50) NOT NULL,
option4 VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $sql1)) {
  echo "Table myPatients created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

if (mysqli_query($conn, $sql2)) {
  echo "Table admins created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

if (mysqli_query($conn, $sql3)) {
  echo "Table questions created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
