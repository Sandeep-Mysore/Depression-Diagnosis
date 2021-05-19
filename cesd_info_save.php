<?php
session_start();
$id = $_SESSION['id'];
$score = 0;
foreach($_POST as $key => $value) {
  $score = $score + (int)$_POST[$key];
}

echo $score;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "UPMC";
$link = mysqli_connect($servername, $username, $password, $dbname);
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO results (patient,score)
VALUES ('$id', '$score')";

$result = mysqli_query($link,$sql);
if($result){
    $last_id = mysqli_insert_id($link);
    echo "Inserted Successfully into Result table. Last Inserted Id is : ". $last_id;
    $_SESSION['id'] = $last_id;
        header("Location: response.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
?>
