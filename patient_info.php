<?php
    session_start();
    $Firstname = $_POST['firstname'];
    $Lastname = $_POST['lastname'];
    $Email = $_POST['email'];
    $Gender = $_POST['gender_btn'];
    $Race = $_POST['race_btn'];
    $Age = $_POST['age'];
    $Contact = $_POST['phone_number'];
    $Previous_Diagnosis = $_POST['prev_diag'];

    $to = "sandeepmysore1711@gmail.com";
    $from = "sandeepmysore1711@gmail.com";
    $subject = "Form submission";
    $headers = array("From: sandeepmysore1711@gmail.com",
    "Reply-To:sandeepmysore1711@gmail.com",
    "X-Mailer: PHP/" . PHP_VERSION
    );
    $headers = implode("\r\n", $headers);
    $message =
    "First Name- " . $Firstname . "\n Last Name- " . $Lastname . "\n Email- " .  $Email . "\n Gender- " . $Gender . "\n\n Race- " . $Race . "\n\n Age- " . $Age . "\n Contact- " . $Contact . "\n Prev_Diag- " . $Previous_Diagnosis . " ";

    echo '<script> alert( '.$message .' )</script>';
    $x = mail("sandeepmysore1711@gmail.com","Form submission",$message);


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "UPMC";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO myPatients (firstname,lastname,email,gender,race,age,phone_no,prev_diag)
    VALUES ('$Firstname', '$Lastname','$Email','$Gender','$Race','$Age','$Contact','$Previous_Diagnosis')";

    $result = mysqli_query($link,$sql);
    if($result){
        $last_id = mysqli_insert_id($link);
        echo "Inserted Successfully into myPatients. Last Inserted Id is : ". $last_id;
        $_SESSION['id'] = $last_id;
            header("Location: cesd.php");
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }

            // $message = "First Name - " . $FirstName . "\n\n" . " Last Name - " . $LastName . "\n\n" . " Email - " .  $Email . "\n\n" .
            //  " Gender - " . $Gender . "\n\n" . " Race - " . $Race . "\n\n" . " Age - " . $Age . "\n\n" . "Contact - " . $Contact . "\n\n" . "Prev_Diag - " . $Previous_Diagnosis . " ";

?>
