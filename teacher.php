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
</head>
<body>
    
    <?php include './important/rightbar.php'; ?>
    <?php include './important/sidebar.php'; ?>

    <!-- stats -->

    <div class="all-students-stats">
        <div class="all-students-stats-content">
            <div class="all-students-stats-circle">
                <div class="all-students-stats-circle-content">
                    <div class="all-students-stats-content-icon">
                        <i class="fas fa-user-graduate fa-2xl"></i>
                    </div>
                </div>
                    <div class="all-students-stats-content-text">
                        <h1 class="students-title">Elevi</h1>
                        <h2 class="students-number">100</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>