<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "UPMC";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $Question = $_POST['question'];
    $Option_A = $_POST['option_a'];
    $Option_B = $_POST['option_b'];
    $Option_C = $_POST['option_c'];
    $Option_D = $_POST['option_d'];

    //$sql = "INSERT INTO users (user_name,name,email_id,password) VALUES ("."$username"."," ."$name".","."$password".","."$email".")";
    // $sql = "SELECT id,email,password FROM admins WHERE admins.email = '$email';";

    // $sql = "INSERT INTO myPatients (firstname,lastname,email,gender,race,age,phone_no,prev_diag)
    // VALUES (".$Firstname.", ".$Lastname.",".$Email.",".$Gender.",".$Race.",".$Age.",".$Contact.",".$Previous_Diagnosis.")";

    // $sql = "INSERT INTO myPatients (firstname,lastname,email,gender,race,age,phone_no,prev_diag)
    // VALUES ("."$Firstname".", "."$Lastname".","."$Email".","."$Gender".","."$Race".","."$Age".","."$Contact".","."$Previous_Diagnosis".")";

    $sql = "INSERT INTO questions (question,option1,option2,option3,option4)
    VALUES ('$Question', '$Option_A','$Option_B','$Option_B','$Option_C')";

    $result = mysqli_query($link,$sql);
    if($result){
        $last_id = mysqli_insert_id($link);
        echo "Inserted Successfully into myPatients. Last Inserted Id is : ". $last_id;
        header("Location: dashboard.php");
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
?>
