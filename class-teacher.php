<?php
define('BASEPATH', true);
session_start();
require('backend/config/db.php');

if(!isset($_SESSION["user"])) {
  header("Location: login.php");
  exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="preload" href="styles/FontAwesome/css/all.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="styles/dashboard/all.css">
    <link rel="stylesheet" href="styles/dashboard/teacher.css">
    <link rel="stylesheet" href="styles/dashboard/all.css">
    <link rel="preload" href="styles/FontAwesome/css/all.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="styles/dashboard/clasa-teacher.css">
</head>
<body>
    
    <?php include './important/rightbar.php'; ?>
    <?php include './important/sidebar.php'; ?>

    <!-- clase -->
 
<div class="section">
  <div class="container-clasa">
    <div class="grid-row">
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      <div class="grid-item">
       <div class="icons">
        <i class="fa-regular fa-notes" style="scale:1.6;" > </i>
    </div>
   <hr style="margin-bottom:15px;margin-top:45px;position:relative;top:10px;visibility:hidden;">
        <span style="margin-top:10px;position:relative;top:25px;">
          <h3>Clasa a5a</h3>
          <p>Dirigintele clasei: Marin Florina</p>
        </span>
 
      </div>
      


    </div>
  </div>
</div>
 
</body>
</html>