<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>  
 
<body>
    <header>
        <a href="./index.php">Home</a>
        <a href="./accounts.php">View all Accounts</a>
        <a href="./transfer.php">Transfer Money</a>
        <a href="./transaction.php">transactions</a>
    </header>
    <main>
        <div class="l">
            <div id="title">
                The Spark Bank
            </div>
            <div id="subtitle">
                World No 1 bank
            </div>
            <button class="btn">
                Get Started
            </button>
        </div>
        <div class="r">
            <img src="bank.jpg" alt="">
        </div>
    </main>
    <div id="services">
        <h1>
            Services
        </h1>
        <ul class="mainul">
            <li>
                <img src="customer.png" alt="">
                <div id="bigtext" >
                    Constomers
                </div>
                <button  onclick="accounts()">
                    View customers
                </button>
            </li>
            <li>
                <img src="transafer.png" alt="">
                <div id="bigtext">
                    Transfer Money
                </div>
                <button onclick="transfer()">
                    Transfer
                </button>
            </li>
            <li>
                <img src="rupee.png" alt="">
                <div id="bigtext">
                    Transactions
                </div>
                <button onclick="trasactions()">
                    View transactions
                </button>
            </li>
        </ul>   
    </div>
    <footer>
        The Sparks Bank 
    </footer>

    <script src="index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>
