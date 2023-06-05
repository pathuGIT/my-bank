<?php require_once('inc/header.php') ?>
<?php require_once('../inc/connect.php') ?>
<section class="mainC">
    <form action="inc/add_data.php" method="post">
        <h3>CREATE USER ACCOUNT</h3>
    <table border="1">
        <tr>
            <td id="left">First Name</td>
            <td id="right"><input type="text" name="fname" required></td>
        </tr>
        <tr>
            <td id="left">Last Name</td>
            <td id="right"><input type="text" name="lname" required></td>
        </tr>
        <tr>
            <td id="left">NIC Number</td>
            <td id="right"><input type="text" name="nic" required></td>
        </tr>
        <tr>
            <td id="left">Tel Number</td>
            <td id="right"><input type="text" name="tel" required></td>
        </tr>
        <tr>
            <td id="left">Home Town</td>
            <td id="right"><input type="text" name="town" required></td>
        </tr>
        <tr>
            <td>Enter Amount</td>
            <td id="right"><input type="text" name="amount" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="password" placeholder="Password" style="width:100%;" required name="pswd"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="password" placeholder="Confirm Password" style="width:100%;" required name="pswd"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" id="btn" value="REGISTER" style="width:100%;"></td>
        </tr>
    </table>
    </form>
</section>