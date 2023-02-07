<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    
    <header>
        <a href="./index.php">Home</a>
        <a href="./accounts.php">View all Accounts</a>
        <a href="./transfer.php">Transfer Money</a>
        <a href="./transaction.php">transactions</a>
    </header>
    <h3>The Transactions </h3>
    <div class="table">
    <?php
    include('connection.php');
    $select = " SELECT * FROM transaction";
    $query = mysqli_query($con,$select);
    $nums = mysqli_num_rows($query);
    $i = 0;

    echo '<table>';
    echo "<tr>";
    echo "<td>Sr No</td>";
    echo "<td>Sender</td>";
    echo "<td>reciever No</td>";
    echo "<td>Amount</td>";
    echo "<td>State</td>";
    echo "</tr>";
    
    while ($row = mysqli_fetch_array($query)) {
        $i++;
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row['name1']."</td>";
        echo "<td>".$row['name2']."</td>";
        echo "<td>".$row['money']."</td>";
        if ($row['state'] == "true") {
            echo "<td class='statet'>".$row['state']."</td>";
        } else {
            echo "<td class='statef'>".$row['state']."</td>";
        }
        echo "</tr>";
    }
    echo '</table>';
    $con -> close();
    
    
?>  
</div>
    <footer>
        The Sparks Bank 
    </footer>
    <script src="index.js"></script>
</body>
</html>
