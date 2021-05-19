<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "UPMC";
$link = mysqli_connect($servername, $username, $password, $dbname);

if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
	signup();
}

function signup(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "UPMC";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql = "SELECT email FROM admins WHERE email = '$email'  ";
    $result = mysqli_query($link,$sql);
    if ($result) {
        if($row = $result->fetch_assoc()) {
            echo "SORRY...YOU ARE ALREADY REGISTERED USER...Please Login<br><br>";
            echo " <a href='login.html'><h2><b>Home</h2></b></a>";
        }
        else{
            newuser();
        }
    }
}

function newuser(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "UPMC";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
	//$sql = "INSERT INTO users (user_name,name,email_id,password) VALUES ("."$username"."," ."$name".","."$password".","."$email".")";
	$sql ="INSERT INTO admins (firstname,lastname,email,password) VALUES ('$firstname', '$lastname','$email','$password')";
	mysqli_query ($link,$sql);
    if($row = fetch_assoc($result)){
		echo "<b><h3>YOUR REGISTRATION IS COMPLETED...</h3></b><br><br>";
		echo " <a href='experience.php'><h2><b>Home</h2></b></a>";
    }
    else{
		echo "<b><h3>NOT REGISTERED.....ERROR</b></h3><br>";
		echo " <a href='experience.php'><h2><b>Home</h2></b></a>";
	}
}
mysqli_close($link);
?>
