<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="../Css/Homepagestyle.css" type="text/css" rel="stylesheet">
    <!-- <link href="../Css/cssfile.css" type="text/css" rel="stylesheet"> -->

</head>

<body>

<!-- Navigation bar -->

<?php
include_once 'navigation_bar.php';
?>

<!--  -->



<!-- slider -->
<div class="slider">
      <!-- fade css -->
      <div class="myslide fade">
        <div class="txt">
          <h1>SMART SHAMBA</h1>
          <p>Smart Farming:<br />"Growing Smarter, Sustaining Better"</p>
          <ul>
            <li class="navbar__btn">
              <a href="login-reg.php" class="button2">Register</a>
            </li>
            </ul>
        </div>
        <img class="Aru" src="../images/parallax9.jpg" style="width: 100%; height: 100%" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>SMART SHAMBA</h1>
          <p>Provide Weather Notification<br />Farmer can search his location and <br> get the weather of the specific location</p>
          <ul>
          <li class="navbar__btn">
            <a href="login-reg.php" class="button2">Register</a>
          </li>
          </ul>
        </div>
        <img
        class="Aru"
          src="../images/quality for jpg"
          style="width: 100%; height: 100%"
        />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>SMART SHAMBA</h1>
          <p>Provide ShambaBot<br />Which will help you in fighting <br>against pest and diseases in your <br>farm through chating with it </p>
          <ul>
            <li class="navbar__btn">
              <a href="login-reg.php" class="button2">Register</a>
            </li>
            </ul>
        </div>
        <img class="Aru" src="../images/chatbot4.png " style="width: 100%; height: 100%" />
        
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>SMART SHAMBA</h1>
          <p>Provide USSD<br />Through Dialing <strong>*380*3600# </strong> Farmer <br> will get benefit information like crop price,<br> weather notification and Agriculture advice</p>
          <ul>
            <li class="navbar__btn">
              <a href="login-reg.php" class="button2">Register</a>
            </li>
            </ul>
        </div>
        <img class="Aru" src="../images/for ussd.webp" style="width: 100%; height: 100%" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>SMART SHAMBA</h1>
          <p>Provide Market<br />Where by Farmer will post his or her crops <br> inorder the buyer can see it <br> and buy without need of brokers</p>
          <ul>
            <li class="navbar__btn">
              <a href="login-reg.php" class="button2">Register</a>
            </li>
            </ul>
        </div>
        <img class="Aru" src="../images/soko.jpg" style="width: 100%; height: 100%" />
      </div>
      <!-- /fade css -->

      <!-- onclick js -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="dotsbox" style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
      <!-- /onclick js -->
    </div>


    </div>

    <!---- Here the main is concerned with the bg only and div=wall will continue--->

    <div class="whyus">
        <div class="whyusimage">
            <img src="../images/parallax4.avif" class="parallax1">
        </div>

        <div class="whyusexplanation">
            <p>Learn about us</p>
            <h2>Tanzania's AgroBusiness Website</h2>
            <div class="whyus_summary">
                <ul>
                    <li><a class="active1" onclick="show_hide1()" onmouseover="hover_ul(this)" onmouseout="hover_ul(this)">About</a></li>
                    <li><a class="active2" onclick="show_hide2()" onmouseover="hover_ul(this)" onmouseout="hover_ul(this)">Mission</a></li>
                    <li><a class="active3" onclick="show_hide3()" onmouseover="hover_ul(this)" onmouseout="hover_ul(this)">Vision</a></li>
                </ul>


                <div class="content">
                    <div id="tab1">
                        <p>
                            Smart Shamba is an AgroBusiness system which brings farmers and customer from different countryside together so as they could conduct business in a smart and very meaningful way so as both of them could benefit easily.   
                        
                
                        </p> 
                    </div>
                    <div id="tab2">

                        Our mission is to majorily help and equip farmers with some necessary knowledge and equipments so as they could be able to strive in Agricultural sector in Tanzania and by building a very wide picture, by helping diferent farmers in Tanzania we also help Tanzania as a whole because it is known that Agriculture is the backbone of economic sector in Tanzania. 

                     
                    </div>
                    <div id="tab3">

                    We intend to improve Tanzania's Economy by only dealing with Agriculture and our vision is to increase Tanzania's economic to 70% and making Tanzania a leading East African country with massive improvement in Agricultural sector


                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="whatwedo">
        <p>What we do</p>
        <h2>We believe that we can help more famers</h2>

        <div class="arragement">
            <div class="block pests">
                <img src="../images/pest.svg" class="a2">
                <p>

                    There is a wide variety of pests and diseases that farmers are unaware of, so Smart Shamba is here for you to provide you farmer with important and  knowledge and awareness of combating these different pests and diseases.

                    

                </p>
            </div>

            <div class="block cash">
                <img src="../images/cash.svg" class="a2">
                <p>

                    We are not only based with farmers bu as customers, Smart Shamba will provide you farmers suitable markets for them to sell thei agricultural products. 

                    
                </p>
            </div>

            <div class="block robot">
                <img src="../images/robot.svg" class="a2">
                <p>In Smart Shamba, there is a chatbot which will talk, understand and answer different questions that the farmer has to offer and these question must majorily deals with matters concerning Agriculture.

                   
                </p>
            </div>

            <div class="block hali">
                <img src="../images/cloud.svg" class="a2">
                <p>
                    In here, Farmers will be given necessary information on matter relating weaher condition so as farmers could know what kind of crops should be grown in that particular season of the year.


                  
                </p>
            </div>

        </div>
    </div>


    <div class="meetheading">
        <p>Our Blog</p>
        <h2>Latest news & articles directly from our blog</h2>
    </div>

    <div class="meet">

        <div class="rain">
            <img src="../images/rain.jpg" alt="">
            <h2>Heavy rainfall in Shinyanga.</h2>
            <p>
            There is an upcoming rainfall in shinyaga so people who are present there either farmer or a normal citizen should be aware of this generous opportunity to grow crops which highly depend on heavy rainfall, and this rainfall will continue for a period of 3 month!!!.
          
            </p>
        </div>

        <div class="kariakoo">
            <img src="../images/kariakoo.jpg" alt="">
            <h2>RICE IS IN HIGH DEMAND!!.</h2>
            <p>
            Biggest selling market of dar (Kariakoo) stated that rice is on a very high demand and farmer from different countryside who ae able to exploit such kind of opportunity should be able to adapt with the environment and take over the market in kariakoo.
           
        
        </p>
        </div>

        <div class="insects">
            <img src="../images/insects.jpg" alt="">
            <h2>Have you heard of "DUNGAMAWE" ?.</h2>
            <p>
                DUNGAMAWE is a dangerous pests that majorily target maize, and these pests are majorily located in coastal areas, so farmers located in those area are strongly advised to be awaare to such ind of pests and its advised to call a professional pests control immediately when you encounter it.

               
            </p>
        </div>
    </div>

    <footer>

    <?php
    include_once "footer.php";
    ?>

    </footer>
    <a id="arrowup" href="#">
        <img id="up" src="../images/arrowup.svg">
    </a>
    <script src="../JavaScript/jsfile.js"></script>
    <script src="../JavaScript/Homepage.js"></script>

</body>

</html>