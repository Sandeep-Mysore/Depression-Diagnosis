<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>UPMC - Health Screening App</title>

    <!-- meta tags for SEO and social sharing -->
    <meta name="description" content="A health screening app, for UPMC." />
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="UPMC - HSA" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://glitch-hello-website.glitch.me/" />
    <meta property="og:description" content="A simple website, built with Glitch. Remix it to get your own." />
    <meta property="og:image" content="/Users/sandeepmysore/.bitnami/stackman/machines/xampp/volumes/root/htdocs/ISD_Project/Code/assets/UPMC_LOGO.png" />
    <meta name="twitter:card" content="summary" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>

  <body style="background-color: #660066;">
      <div class="jumbotron text-white" id="header" style="padding:0;">
          <div class="row" id="logo">
              <div class="col" style="padding:0;margin:0;">
                  <img src="assets/UPMC_LOGO.png" width="300" height="80" alt="UPMC">
              </div>
              <div class="col">
                  <div class="page-header title">
                      <h1>Health Check Application</h1>
                  </div>
              </div>
          </div>
      </div>
    <div id="content">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "UPMC";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM myPatients";
    $result = mysqli_query($link,$sql);
    // $row = mysqli_fetch_assoc($result);
    echo '<br><h2 style="text-align:center;vertical-align:center;color: #660066;"> My Patients </h2>';

    echo '<table border="1" style="margin-left:15%;margin-right:15%;text-align:center;vertical-align:center;border:2px solid #660066;" cellspacing="3" cellpadding="3">
      <tr>
          <td> <font face="Arial">Patient_id</font> </td>
          <td> <font face="Arial">Firstname</font> </td>
          <td> <font face="Arial">Lastname</font> </td>
          <td> <font face="Arial">Email</font> </td>
          <td> <font face="Arial">Gender</font> </td>
          <td> <font face="Arial">Race</font> </td>
          <td> <font face="Arial">Age</font> </td>
          <td> <font face="Arial">Contact</font> </td>
          <td> <font face="Arial">Previous_Diagnosis</font> </td>
      </tr>';

      while($row = mysqli_fetch_assoc($result)){
          $Patient_id = $row['id'];
          $Firstname = $row['firstname'];
          $Lastname = $row['lastname'];
          $Email = $row['email'];
          $Gender = $row['gender'];
          $Race = $row['race'];
          $Age = $row['age'];
          $Contact = $row['phone_no'];
          $Previous_Diagnosis = $row['prev_diag'];
          echo '<tr>
                      <td>'.$Patient_id.'</td>
                      <td>'.$Firstname.'</td>
                      <td>'.$Lastname.'</td>
                      <td>'.$Email.'</td>
                      <td>'.$Gender.'</td>
                      <td>'.$Race.'</td>
                      <td>'.$Age.'</td>
                      <td>'.$Contact.'</td>
                      <td>'.$Previous_Diagnosis.'</td>
                  </tr>';
      }
      '</table>';

    ?>
</div>
<br>
<div class="content">
<div class="row">
    <div class="col-xl" style="padding:0;margin:10px;margin-left: 15%;margin-right: 15%;text-align:center;vertical-align:center;">
        <button type="button" class="btn btn-primary" id="create_questions" name="create_questions" onclick="create_questions()"><b>Create Questions</b></button>
    </div>
    <div class="col-xl" style="padding:0;margin:10px;margin-left: 15%;margin-right: 15%;text-align:center;vertical-align:center;">
        <button type="button" class="btn btn-primary" id="show_scores" name="show_scores" onclick="show_scores()"><b>Show Scores</b></button>
    </div>
    <div class="col-xl" style="padding:0;margin:10px;margin-left: 15%;margin-right: 15%;text-align:center;vertical-align:center;width:110%;">
        <button type="button" class="btn btn-primary" id="home" name="home" onclick="home()"><b>Home Page</b></button>
    </div>
</div>
</div>
</body>
</html>
