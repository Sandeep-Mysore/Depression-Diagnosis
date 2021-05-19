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
<form action="patient_info.php" class="needs-validation" role="form" id="signup_form" name="signup_form" method = "POST" novalidate>
   <div class="form-group">
     <label for="firstname">First Name:</label>
     <input type="text" class="form-control" style="width:60%;margin-left:20%;margin-right:20%;text-align:center;vertical-align:center;border:2px solid #660066;" id="firstname" placeholder="Enter First Name" name="firstname" required>
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div>
   <div class="form-group">
     <label for="lastname">Last Name:</label>
     <input type="text" class="form-control" style="width:60%;margin-left:20%;margin-right:20%;text-align:center;vertical-align:center;border:2px solid #660066;" id="lastname" placeholder="Enter Last Name" name="lastname" required>
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div>
   <div class="form-group">
     <label for="email">Email:</label>
     <input type="email" class="form-control" style="width:60%;margin-left:20%;margin-right:20%;text-align:center;vertical-align:center;border:2px solid #660066;" id="email" placeholder="Enter Email" name="email" required>
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div>
   <div class="form-group">
     <label for="phone_number">Phone Number:</label>
     <input type="text" class="form-control" style="width:60%;margin-left:20%;margin-right:20%;text-align:center;vertical-align:center;border:2px solid #660066;" id="phone_number" placeholder="Enter Phone Number" name="phone_number" required>
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div>

   <div class="form-group">
     <label for="age">Age :</label>
     <input type="text" class="form-control" style="width:60%;margin-left:20%;margin-right:20%;text-align:center;vertical-align:center;border:2px solid #660066;" id="age" placeholder="Enter Age" name="age" required>
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div>


   <div class="form-group btn-group" style="text-align:center;vertical-align:center;border:2px solid #660066;">
       <input type='hidden' name='gender_btn' id="gender_btn">
     <button type="button" name="gender_btn" value = "gender" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="gender_btn1">
         Gender &nbsp;&nbsp;&nbsp;
       <span class="sr-only">Toggle Dropdown</span>
     </button>
     <div class="dropdown-menu">
       <li value="Male" name="gender_btn"><a class="dropdown-item"  onclick="replace_item_1(this.innerHTML);my(this.innerHTML)">Male</a></li>
       <li value="Female" name="gender_btn"><a class="dropdown-item" onclick="replace_item_1(this.innerHTML);my(this.innerHTML)">Female</a></li>
       <div class="dropdown-divider"></div>
       <li value="AGender" name="gender_btn"><a class="dropdown-item"  onclick="replace_item_1(this.innerHTML);my(this.innerHTML)">AGender</a></li>
     </div>

   </div>

   <div class="form-group btn-group" style="text-align:center;vertical-align:center;border:2px solid #660066;">
       <input type='hidden' name='race_btn' id="race_btn"></input>
     <button type="button" name="race_btn" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="race_btn1">
         Race &nbsp;&nbsp;&nbsp;
       <span class="sr-only">Toggle Dropdown</span>
     </button>
     <div class="dropdown-menu">
       <li value="American_Indian/Alaska_Native" name="race_btn"><a class="dropdown-item"  onclick="replace_item_2(this.innerHTML);mx(this.innerHTML);">American Indian/Alaska Native</a></li>
       <li value="Asian" name="race_btn"><a class="dropdown-item"  onclick="replace_item_2(this.innerHTML);mx(this.innerHTML);">Asian</a></li>
       <li value="Black/African_American" name="race_btn"><a class="dropdown-item" onclick="replace_item_2(this.innerHTML);mx(this.innerHTML);">Black/African American</a></li>
       <li value="Hispanic/Latino" name="race_btn"><a class="dropdown-item" onclick="replace_item_2(this.innerHTML);mx(this.innerHTML);">Hispanic or Latino</a></li>
       <li value="Native_Hawaiian/Pacific_Islander" name="race_btn"><a class="dropdown-item" onclick="replace_item_2(this.innerHTML);mx(this.innerHTML);">Native Hawaiian or Pacific Islander</a></li>
       <div class="dropdown-divider"></div>
       <li value="White" name="race_btn"><a class="dropdown-item" onclick="replace_item_2(this.innerHTML);mx(this.innerHTML);">White</a></li>
     </div>
   </div>
   <br>

   <div class="form-group btn-group" style="text-align:center;vertical-align:center;border:2px solid #660066;">
       <input type='hidden' name='prev_diag' id="prev_diag"></input>
     <button type="button" name="prev_diag" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="prev_diag1">
         Previously Diagnosed &nbsp;&nbsp;&nbsp;
       <span class="sr-only">Toggle Dropdown</span>
     </button>
     <div class="dropdown-menu">
       <li value="Yes" name="prev_diag"><a class="dropdown-item"  onclick="replace_item_3(this.innerHTML);mz(this.innerHTML);">Yes</a></li>
       <div class="dropdown-divider"></div>
       <li value="No" name="prev_diag"><a class="dropdown-item" onclick="replace_item_3(this.innerHTML);mz(this.innerHTML);">No</a></li>
     </div>
   </div>
<br>

   <button type="submit" class="btn btn-primary" value="sign-up" name="submit" onclick="return Validate()">Submit</button>
 </form>

</div>


  </body>
</html>
