<?php require_once('inc/connect.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Bank Management System</title>
</head>
<body>
    <form action="inc/check.php" method="post">
    <div class="login_page">
    <h1 id="tag">BANK <br> MANAGEMENT SYSTEM</h1>
        <table>
            <tr>
                <td style="height:50px; border-bottom: 1px solid black; font-size:22px; text-align:center; " colspan=2 style="text-align:center;">LOGIN</td>
            </tr>
            <tr>
                <td  style="padding-top:30px;">Account Nu:</td>
                <td style="width:60%; height:70px; padding-top:30px;"><input type="text" name="acc" style="width:100%; height:70%" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td style="width:60%; height:40px"><input type="password" name="pswd" style="width:100%; height:70%" required></td>
            </tr>
            <tr>
                <td colspan=2 style="width:60%; height:50px; padding-top:10px;"><input type="submit" value="LOGIN" style="width:100%;height:100%;"></td>
            </tr>
        </table>
    </div>
    </form>
</body>
</html>
