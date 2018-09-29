<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> All India Railway Hospital
    </title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar  navbar-static-top">
         <a class="navbar-brand"><i class="far fa-hospital"> All India Railway Hospital</a></i>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a href="#" target="_blank"> Address :lucknow</a>
              </li>
              <li class="nav-item">
                <a href="#">Ambulance Number: 110898</a>
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
