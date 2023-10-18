<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about page</title>
    <link href="../Css/about.css" rel="stylesheet" href="about.css">
</head>

<body>
    <div class="general">

        <!-- Navigation bar -->
    
    <?php
    include_once 'navigation_bar.php';
    ?>
    
        <!--  -->

<!-- <header>
            <div class="navbar">
                <div class="logo">
                    <h1 class="t1" style="color:#006400;">SMART SHAMBA</h1>
                </div>
                <ul>
                    <li><a href="Homepage.php">Home</a></li>
                    <li><a href="market2.php">Market</a></li>
                    <li><a href="about.php" class="active">About</a></li>
                    <li><a href="login-reg.php">Login</a></li>


                </ul>
            </div> 
</header> -->


        <div class="about">
            <h2>About Us</h2>
            <hr>
            <!-- <div class="desc">
                <p>Smart Shamba is the System developed for solving problems which have been a thorn to many farmers in tanzania especially those who conduct agro business like weather,pests&diseases and markert
                </p> -->

        </div>
    </div>
    </div>
    <div class="information">

        <div class="info">
            <img class="photo" src="../images/rainfall.jpg" alt="">
            <div class="one">
                <h2>Weather Forecasting</h2>
                <p>
                    Smart Shamba systm have system administrators who obtain information regarding weather condition from weather forecasting and then provide them to farmers
                </p>
            </div>
        </div>


        <div class="info">
            <div class="one">
                <h2>Pest and Diseases</h2>
                <p>Smart Shamba System has a chartbot which will enable farmers to ask different questions regalding pest and diseases which affect crops to grow well and have higher productivity
                </p>
            </div>
            <img class="photo" src="../images/crop3.jpg" alt="">

        </div>

        <div class="info">
            <img class="photo" src="../images/market2.jpg" alt="">
            <div class="one">
                <h2>Markert</h2>
                <p>Smart Shamba System allow farmers to pst their crops so as to be easy to get customers from different countryside and earn high profit</p>
            </div>
        </div>
    </div>
    </div>

    <footer>
        
    <?php
    include_once "footer.php";
    ?>


    </footer>
    <script src="../JavaScript/Homepage.js"></script>

</body>

</html>