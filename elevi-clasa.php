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
<html>

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
    <link rel="stylesheet" href='styles/dashboard/elevi-clasa-prof.css'>
 </head>
<body>   
    <?php include './important/rightbar.php'; ?>
    <?php include './important/sidebar.php'; ?>
    
    <div class="children-area">
        <div class='child'>
            <img src='img\ghetu.png' alt="Poza de profil">
            <div class='date'>
            <p>Ghetu Stefan</p>
            <div class='note'>
            <span>Media generala : 9.65</span>
            
            <span>Media la materia dvs. : 8.7</span>
                </div>
          
                    </div>
            
        </div>
    </div>

  
</body>
</html>