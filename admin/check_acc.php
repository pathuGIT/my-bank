<?php require_once('inc/header.php') ?>
<?php require_once('inc/connect.php')?>


<form action="check_acc.php" method="post" class="check">
    <table>
        <tr>
            <th id="acc-input"><input type="text" name="accno" placeholder="Account Number" required style="border: 1px solid red;"></th>
            <th><input type="submit" value="SEARCH" id="btn-search" style="border: 1px solid red;"></th>
        </tr>
    </table>
</form>

<?php 
    
    
    
    if(isset($_POST['accno'])){

        $query = "SELECT accno,fname,lname,telno,nicno,city,amount,password FROM customer_bank";
        $table = '<table border="1" class="tbl">';
        $table .= '<tr><th>Acc No</th><th>First Name</th><th>Last Name</th><th>Tel</th><th>NIC</th><th>City</th><th>Amount</th><th>Password</th></tr>';

        $Acc = $_POST['accno'];
        $result = mysqli_query($conn,$query);
        if($result){
            while($record = mysqli_fetch_assoc($result)){
                if($record['accno'] == $Acc){
                    $table .= '<tr>';
                    $table .= '<td>'.$record['accno'].'</td>';
                    $table .= '<td>'.$record['fname'].'</td>';
                    $table .= '<td>'.$record['lname'].'</td>';
                    $table .= '<td>'.$record['telno'].'</td>';
                    $table .= '<td>'.$record['nicno'].'</td>';
                    $table .= '<td>'.$record['city'].'</td>';
                    $table .= '<td>'.'Rs.'.$record['amount'].'</td>';
                    $table .= '<td>'.$record['password'].'</td>';
                    $table .= '</tr>';
                    break;
                }else{
                    //echo"This Account number not valid.";
                }
                    
            }
        }else{
            echo"Connection Failed";
        }

        echo $table;
    }
    
?>

<?php ?>
