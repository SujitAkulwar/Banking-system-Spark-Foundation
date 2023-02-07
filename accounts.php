
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
    <h3>The customers </h3>
    <div class="table">
    <?php
    include('connection.php');
    

    $select = " SELECT * FROM user ORDER BY srno";
    $query = mysqli_query($con,$select);
    $nums = mysqli_num_rows($query);


    echo '<table>';
    echo "<tr>";
    echo "<td>No</td>";
    echo "<td>Name</td>";
    echo "<td>Account No</td>";
    echo "<td>Balance</td>";
    echo "</tr>";
    
    while ($row = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>".$row['srno']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['ano']."</td>";
        echo "<td>".$row['ba']."</td>";
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
