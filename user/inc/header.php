<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Profile</title>
</head>
<body>
    <header>
        <ul>
            <li id="home"><a href="user.php">HOME</a></li>
            <li id="out"><a href="../index.php">LOG OUT</a></li>
        </ul>
    </header>
    <ul class="second-header">
        <li id="UN"><?php echo"WELCOME {$_SESSION['user_fname']}!"; ?></li>
    </ul>