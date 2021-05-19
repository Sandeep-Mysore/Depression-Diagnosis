<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "UPMC";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    $email=$_POST['email'];
    $password=$_POST['password'];
	//$sql = "INSERT INTO users (user_name,name,email_id,password) VALUES ("."$username"."," ."$name".","."$password".","."$email".")";
    $sql = "SELECT id,email,password FROM admins WHERE admins.email = '$email';";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['email']){
        if ($row['email'] == $email){
            if($row['password'] == $password){
                //create session
                $_SESSION['id'] = $row['id'];
                header("Location: dashboard.php");
            }
        }
    }

mysqli_close($link);
?>
