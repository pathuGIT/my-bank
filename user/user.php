<?php require_once('inc/header.php')?>
<?php require_once('inc/connect.php')?>

<?php 
    $query = "SELECT accno,fname,lname,telno,nicno,city,amount FROM customer_bank";
    $result = mysqli_query($conn,$query);
    //echo "{$_SESSION['user_id']}";

    $X = $_SESSION['user_id'];

    if($result){
        while($record = mysqli_fetch_assoc($result)){
            if( $X == $record['accno']){

                $FN = $record['fname'];
                $LN = $record['lname'];
                $AN = $record['accno'];
                $PN = $record['telno'];
                $NIC = $record['nicno'];
                $CITY = $record['city'];
                $AMNT = $record['amount'];
                break;
            }else{
            }
        }
    }else{
        echo"Failed";
    }
?>

<div class="body">
    <section id="lefts">
        <table border="1">
            <tr>
                <td colspan="2" style="text-align:center; font-size:18px;">Your Details</td>
            </tr>
            <tr>
                <td>Account Number</td>
                <td><?php echo $AN?></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><?php echo $FN?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo $LN?></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><?php echo $PN?></td>
            </tr>
            <tr>
                <td>NIC Number</td>
                <td><?php echo $NIC?></td>
            </tr>
            <tr>
                <td>City</td>
                <td><?php echo $CITY?></td>
            </tr>
            <tr>
                <td>Amount</td>
                <td><?php echo "Rs.",$AMNT?></td>
            </tr>
        </table>
    </section>
    <section id="rights">
        <h2 id="topic">TRANSFER</h2>
        <form action="inc/transfer.php" method="post">
            <table>
                <tr>
                    <td>Enter To Account Number:</td>
                    <td><input type="text" name="ToAcc"></td>
                </tr>
                <tr>
                    <td>Enter Amount:</td>
                    <td><input type="text" name="ToAmnt"></td>
                </tr>
                <tr>
                    <td><input type="submit" id="btn" value="TRANSFER"></td>
                </tr>
            </table>
        </form>
    </section>
</div>