<?php require_once('connect.php')?>

<?php 

$ACC = $_POST['acc'];
$PSWD = $_POST['pswd'];

    $query = "SELECT accno,fname,lname,telno,nicno,city,password,amount FROM customer_bank";
    $result = mysqli_query($conn,$query);
    if($result){
        while($record = mysqli_fetch_assoc($result)){
            if($ACC == $record['accno'] && $PSWD == $record['password']){
                echo"Found";
                session_start();
                $_SESSION['user_id'] = $record['accno'];
                $_SESSION['user_fname'] = $record['fname'];
                $_SESSION['user_lname'] = $record['lname'];
                
                header("Location:../user/user.php");
                break;
            }else if($ACC == 2189){
                if($PSWD == 2189){
                    header("Location:../admin/admin.php");
                    break;
                }
                
            }else{
                //echo"error <br>";
            }
        }
    }else{
        echo"Failed";
    }
    
?>
<h2>Wrong Password Try Agan!</h2>