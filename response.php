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
    <div class="jumbotron text-white" id="header" style="padding:0;">
        <h1 style="text-align:center;padding-top:10px;margin:10px;margin-top:10%;">Thank You For Your Response</h1>
        <button style="text-align:center;padding-top:10px;margin:10px;margin-top:10%;margin-left:44%;" type="button" class="btn btn-primary" id="home" name="home" onclick="home()"><b>Home Page</b></button>
    </div>

</body>
</html>
