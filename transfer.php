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
    <h3>Enter transaction </h3>
    <form action="transfer.php" method="get">
        Sender :<input type="text" name="name1">
        reciever :<input type="text" name="name2">
        Amount :<input type="text" name="amount">
        <input type="submit" class="submit btn">
    </form>

    <?php 
    include('connection.php');
    if(isset($_GET['name1']) && isset($_GET['name2']) && isset($_GET['amount'])){
        $name1 =  $_GET["name1"]; 
        $name2 =  $_GET["name2"]; 
        $amount =  $_GET["amount"]; 
        
        $select1 = " SELECT `ba` FROM `user` WHERE `name`='$name1'";
        $query1 = mysqli_query($con,$select1);
        $row1 = mysqli_fetch_array($query1);

        $select2 = " SELECT `ba` FROM `user` WHERE `name`='$name2'";
        $query2 = mysqli_query($con,$select2);
        $row2 = mysqli_fetch_array($query2);

        
        $x = $row1['ba'];
        $y = $row2['ba'];
        
        if($x>$amount){
            echo "transaction successfull ! ";
            // echo $x;
            // echo " ";
            // echo $y;
            $x = $x-$amount;
            $y = $y+$amount;
            // insert new values in user table 
            $update1 = " UPDATE `user` SET `ba`=$x WHERE `name`='$name1'";
            if (mysqli_query($con, $update1)) {
                echo "Record";
            } 
            $update2 = " UPDATE `user` SET `ba`=$y WHERE `name`='$name2'";
            if (mysqli_query($con, $update2)) {
                echo " Updated ";
            } 
            $insert = "INSERT INTO `transaction`(`name1`, `name2`, `money`, `state`) VALUES ('$name1','$name2',$amount,'true')";
            if (mysqli_query($con, $insert)) {
                echo " Successfully !!! ";
            } 
            // insert new transaction in transaction table
        }else{
            echo "transaction failed !";
            // insert new transaction in transaction table
            $insert = "INSERT INTO `transaction`(`name1`, `name2`, `money`, `state`) VALUES ('$name1','$name2',$amount,'false')";
            if (mysqli_query($con, $insert)) {
                echo " Error : Insuficient balance !!! ";
            } 
        }
        
    }
    ?>
<script src="index.js"></script>
</body>
</html>