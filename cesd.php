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
      <div class="container" id="content" style="margin-left:7%;padding-left: 4%;padding-right: 6%;width: 180%;text-align:center;vertical-align:center;">
          <h2>Below is a list of some of ways you may have felt or behaved before. Please check the box to indicate how often you have felt this way during the past week.</h2>
      </div>
      <div id="content">
         <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "UPMC";
        $link = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM questions";
        $result = mysqli_query($link,$sql);
        if ($result){
            $score = 0;
            echo '<table border="1" style="margin-left:15%;margin-right:15%;text-align:center;vertical-align:center;border:2px solid #660066;" cellspacing="3" cellpadding="3">
              <tr id="table_row">
                  <td> <font face="Arial">Question Number</font> </td>
                  <td> <font face="Arial">Question</font> </td>
                  <td> <font face="Arial">Less Than 1 Day</font> </td>
                  <td> <font face="Arial">1-2 Days</font> </td>
                  <td> <font face="Arial">3-4 Days</font> </td>
                  <td> <font face="Arial">5-7 Days</font> </td>
              </tr>';
            while ($row = mysqli_fetch_assoc($result)) {
                $Id = $row['id'];
                $Question = $row['question'];
                $Option_A = $row['option1'];
                $Option_B = $row['option2'];
                $Option_C = $row['option3'];
                $Option_D = $row['option4'];

                echo '
                    <form action="cesd_info_save.php" class="needs-validation" role="form" id="cesd_form" name="cesd_form" method = "POST" novalidate>
                    <tr id="table_row opts" style="text-align:center;vertical-align:center;">
                    <td> '.$Id.' </td>
                    <td> '.$Question.' </td>
                    <td style="text-align:center;vertical-align:center;"><input id="radio_btn" type="radio" name="options'.$Id.'" value="0"></td>
                    <td style="text-align:center;vertical-align:center;"><input id="radio_btn" type="radio" name="options'.$Id.'" value="1"></td>
                    <td style="text-align:center;vertical-align:center;"><input id="radio_btn" type="radio" name="options'.$Id.'" value="2"></td>
                    <td style="text-align:center;vertical-align:center;"><input id="radio_btn" type="radio" name="options'.$Id.'" value="3"></td>
                    </tr>
                    <br>';
                }
        echo '</table>';
    }
    ?>
   </div>
   <div id="content">
       <?php
   
   echo '<button type="submit" class="btn btn-primary" value="sign-up" name="submit">Submit</button>
   </form>';
   ?>
    </div>
     </body>
   </html>
