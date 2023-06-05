<?php require_once('connect.php') ?>

<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $nic = $_POST['nic'];
    $tel = $_POST['tel'];
    $town = $_POST['town'];
    $pswd = $_POST['pswd'];
    $amount = $_POST['amount'];

    $query = "INSERT INTO customer_bank (fname,lname,telno,nicno,city,password,amount) VALUES ('$fname','$lname','$tel','$nic','$town','$pswd','$amount')";

    $result = mysqli_query($conn,$query);
    if($result){
        echo"correct!";
        header("Location: ../admin.php");
    }else{
        echo"Error";
    }
?>
<?php mysqli_close($conn); ?>