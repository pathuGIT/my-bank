<?php require_once('connect.php')?>
<?php session_start(); ?>

<?php
    $transfer_acc = $_POST['ToAcc'];
    $transfer_amnt = $_POST['ToAmnt'];
?>

<?php require_once('connect.php') ?>

<?php

    $query = "SELECT accno,fname,lname,telno,nicno,city,amount FROM customer_bank";
    $result = mysqli_query($conn,$query);
    if($result){
        while($record = mysqli_fetch_assoc($result)){
            if($_SESSION['user_id'] == $record['accno']){
                if($record['amount']>$transfer_amnt){
                    echo "Yes";

                    //REMOVE AMOUNT FROM ACCOUNT OWNER
                    $value = $record['amount'] - $transfer_amnt;
                    $sql = "UPDATE customer_bank SET amount=$value WHERE accno = {$_SESSION['user_id']} ";
                    if ($conn->query($sql) === TRUE) {
                        //echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }

                    //ADD AMOUNT TO TRANSFR ACOOUNTER
                    $query = "SELECT accno,fname,lname,telno,nicno,city,amount FROM customer_bank";
                    $result = mysqli_query($conn,$query);
                    if($result){
                        while($record = mysqli_fetch_assoc($result)){
                            if($transfer_acc == $record['accno']){
                                $avalue = $record['amount'] + $transfer_amnt;
                                $sql = "UPDATE customer_bank SET amount=$avalue WHERE accno = $transfer_acc";
                
                                if ($conn->query($sql) === TRUE) {
                                    echo "Record updated successfully";
                                    header("Location: ../user.php");
                                } else {
                                    echo "Error updating record: " . $conn->error;
                                }
                                break;
                            }
                        }
                    }break;

                }else{
                    echo "Your Account Balance is't sufficent!</br>";
                }

            }
    }   
    }else{

    }
    

    // $query = "SELECT accno,fname,lname,telno,nicno,city,amount FROM customer_bank";
    // $result = mysqli_query($conn,$query);
    // if($result){
    //     while($record = mysqli_fetch_assoc($result)){
    //         if($transfer_acc == $record['accno']){
    //             $value = $record['amount'] + $transfer_amnt;
    //             echo $value;
    //             $sql = "UPDATE customer_bank SET amount=$value WHERE accno = $transfer_acc";

    //             if ($conn->query($sql) === TRUE) {
    //                 echo "Record updated successfully";
    //             } else {
    //                 echo "Error updating record: " . $conn->error;
    //             }
    //             break;
    //         }
    //     }
    // }else{
    //     echo"Failed";
    // }
?>
<?php mysqli_close($conn); ?>