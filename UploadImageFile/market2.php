<?php
include_once 'database.connectSS.php';

$sql5 = "SELECT * FROM sales2;";
$result = mysqli_query($conn, $sql5);

$resultCheck = mysqli_num_rows($result);

$picture ="";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>

<link rel="stylesheet" href="../Css/markt2.css">  
<link href="../Css/cssfile.css" type="text/css" rel="stylesheet">


</head>
<body>

<!-- Navigation Bar -->

<?php
include_once 'navigation_bar.php';
?>

<!--  -->

        <main>
            
            <div class="services">
                <h1>Different Crops Available</h1>
            </div>

        <div class="row4">
       
                    <?php

                while($row = mysqli_fetch_assoc($result)){ ?>

            <div class="crop">
                <form method="GET">
                    <div class="product">

                    <div class="main">
                    <div class="card">
                    <div class="title"><h1><?php echo $row ['product']?></h1></div>
                    <div class="image"><img class="photo" src="img/<?php echo $row["image"];?>" alt=""></div>
                    <div class="des">

                     
                       
                        <li>Farmer's Username : <?php echo $row ['uname_farmer'];?></li>
                        <li>City : <?php echo $row ['city'];?></li>
                        <li>Phone Number : <?php echo $row ['phone_number'];?></li>
                        <button class="buy"> 
                            <a href="customer.php">BUY</a>
                        </button>
                        <!-- <button>Read More...</button> -->
                    
                    </div>

                    </div>
                    </div>
                    </div>
                </form>
            </div>

                <?php }


                ?>
        </div> 
        
        </main>

       

<footer>

<?php
    include_once "footer.php";
    ?>
    
    </footer>

    <a id="arrowup" href="#">
        <img id="up" src="../images/arrowup.svg">
    </a>
    <script src="../JavaScript/card.js"></script> 


</body>
</html>