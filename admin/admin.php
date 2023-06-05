<?php require_once('../inc/connect.php') ?>
<?php require_once('inc/header.php') ?>
<style>  
    .main th,td{
        padding: 7px 16px;
    }
</style>
<?php
    $query = "SELECT accno,fname,lname,telno,nicno,city,amount FROM customer_bank";
    $result = mysqli_query($conn,$query);
    if($result){
        $sum = 0;
        $rows = mysqli_num_rows($result);
        $table = '<table border="1">';
        $table .= '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Tel nu:</th><th>NIC</th><th>City</th><th>Amount (Rs.)</th>';

            while($record = mysqli_fetch_assoc($result)){
                $sum = $sum+$record['amount'];
                $table .= '<tr>';
                $table .= '<td>'.$record['accno'].'</td>';
                $table .= '<td>'.$record['fname'].'</td>';
                $table .= '<td>'.$record['lname'].'</td>';
                $table .= '<td>'.$record['telno'].'</td>';
                $table .= '<td>'.$record['nicno'].'</td>';
                $table .= '<td>'.$record['city'].'</td>';
                $table .= '<td>'.'Rs.'.$record['amount'].'</td>';
                $table .= '</tr>';
            }
        
        $table .= '</table>';
    }else{
        echo"Faied";
    }
?>
<section class="section">
    <div class="main">
        <?php echo $table ;?>
    </div>
    <div class="right">
        <?php echo'All Amount : Rs.'.$sum;?><br>
        <?php echo'No Of Users: '.$rows;?>
    </div>
</section>
<?php mysqli_close($conn); ?>