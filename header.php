<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Terrion</title>
</head>
<body>

    <?php
        include 'login.php';  
    ?> 
    
    <div id="topnav">
        <div class="container">
        <form action="" id="search">
            <input type="text" placeholder="Search">    
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <ul>
            <?php 
                if (isset($_SESSION['userName'])) {
                    echo '<li class="session-css">Mir se vini '.  $_SESSION['userName'] . ' ' . $_SESSION['userSurname'].  '</li>';
                }    
                    ?>
            <li><a href="index.php">Home</a></li>
            <?php
                if (!isset($_SESSION['userName'])) {
                    echo '<li><a href="javascript:loginPopUp()">LogIn</a></li>
                          <li><a href="signup.php">Sign Up</a></li>';
                }
                else {
                    echo   '<li>
                                <form action="includes/logout.inc.php" method="post" id="logout">
                                    <button class="btn-3" type="submit" name="logout-submit">Logout</button>
                                </form>
                            </li>';       
                }
            ?>
        </ul>
        </div>
    </div>

    <div id="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="./sources/logo.png" alt="">
                </div>
                <ul>
                    <li><a href="index.php" class="home-logo"><i class="fas fa-home"></i></a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Protofolio</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div> 
