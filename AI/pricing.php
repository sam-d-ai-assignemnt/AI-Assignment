<?php
session_start();
    
    include("functions.php");
    include("connection.php");

    $user_data = check_login($con);
?>


<!DOCTYPE html>
<html>
    <style>
        html {
            width: 100%;
        }
        body{
            background-color: beige;
            width: 99%;
        }
        #login{
            position: relative;
            float:left;
            left: 25%;
        }
        #name{
            position: relative;
            left:10%;
            float: left;
        }
        #container{
            position: fixed;
            top: 0%;
            border-style: solid;
            border-color: black;
            display: inline-block;
            width: 99%;
            left: 0%;
            background-color: white;
            z-index:2;
        }
        #icon{
            position:relative;
            float: left;
            left:5%;
            padding-top:1%;
        }
        #api{
            float: left;
            position: relative;
            left: 35%;
            padding: 10px;
            bottom: 5px;
            border-style: solid;
            border-color: white;
            border-width: 2%;
            border-radius: 35px;
            cursor: pointer;
        }
        #pricing{
            float: left;
            position: relative;
            left: 40%;
            padding: 1%;
            border-style: solid;
            border-width: 2%;
            border-radius: 35px;
            border-color: white;
            cursor: pointer;
        }
        #blog{
            float: left;
            position: relative;
            left: 45%;
            padding: 1%;
            border-style: solid;
            border-width: 2%;
            border-radius: 25px;
            border-color: white;
            cursor: pointer;
        }
        #login{
            position: relative;
            float:left;
            left: 20%;
            padding: 10px;
            bottom:10px;
            border-style: solid;
            border-color: white;
            border-width: 2%;
            border-radius: 35px;
        }
    </style>
    <head>
        <title>
            Auto Podcast AI - Pricing
        </title>
        <link rel = "icon"; href = "images/favicon.jpg">
    </head>
    <body>
        <script src = "heading.js"></script>
        <div id = "container">
            <a href = "index.php">
                <img src = "images/icon.jpg" height="50px" id = "icon">
            </a>
            <h1 id = "name">
                <?php 
                if ($user_data == false){
                }
                else{
                    echo $user_data['user_name'];
                }
                ?>
            </h1>
            <a href = <?php
                if ($user_data == false){
                    echo "login.php";
                }
                else{
                    echo "logout.php";
                }
            ?>>
                <h1 id = "login" onmouseover = "showLogin()" onmouseout = "hideLogin();">
                    <?php
                        if ($user_data == false){
                            echo "Log in";
                        }
                        else{
                            echo "Log out";
                        }
                    ?>
                </h1>
            </a>
            <a href = "API.php">
                <h2 id = 'api' onmouseover="showAPI()" onmouseout="hideAPI()">
                    API
                </h2>
            </a>
            <a href = "pricing.php">
                <h2 id = "pricing" onmouseover="showPricing()" onmouseout="hidePricing()">
                    Pricing
                </h2>
            </a>
            <a href = "blog.php">
            <h2 id = "blog" onmouseover = "showBlog()" onmouseout = "hideBlog()">
                Blog
            </h2>
            </a>
            <br>
        </div>
    <h1 style="position: relative; left:40%; width:35%; padding-top: 10%;">
        Signup Options:
    </h1>
    <div id = "one-time" style="background-color: lightblue; position: relative; left: 1%; width: 23%; float: left; min-height:100%; min-height: 463px;">
        <center>
        <p style="position: relative; font-size: 30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-overflow: break-word;">
            One Time Purchase
        </p>
        <p style = "position: relative; font-size: 30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            $15
        </p>
        </center>
        <p style = "position: relative; left: 25%; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; width: 75%; text-overflow: scroll;">
            <span style="color: blue;">-One time access to our AI<br></span>
            <span style = "color: red;">
            -No access to our API
            </span>
        </p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="221">
            <input type="image" name="submit" width="70%" style = "position: relative; left: 15%;" src="images/purchase.png" alt="PayPal - The safer, easier way to pay online">
          </form>
                  <br>
        <br>
    </div>
    <div style="position: relative; left: 2%; width: 23%; background-color:lightgreen; float:left;">
        <center>
        <p style="position: relative; left: 1%; font-size: 30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ">
            Beginner Permanent Plan
        </p>
        <p style="position: relative; font-size: 30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            $120/yr
        </p>
        </center>
        <p style="position:relative; left:15%; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; width: 75%; text-overflow: scroll;">
            <span style="color:blue"> - 1 podcast per month<br></span>
            <span style = "color: red">- No API access<br>-Limited to 1 podcsast per month</span>
        </p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="business" value="www.website.com"> 
            <input type="hidden" name="cmd" value="_xclick-subscriptions"> 
            <input type="hidden" name="item_name" value="Auto Podcast"> 
            <input type="hidden" name="item_number" value="Auto Podcast"> 
            <input type="hidden" name="currency_code" value="USD"> 
            <input type="hidden" name="a3" value="120.00">
            <input type="hidden" name="p3" value="1">
            <input type="hidden" name="t3" value="Y">
            <input type="hidden" name="src" value="1">
            <input type="image" name="submit" src="images/subscribe.png" width="70%;" style="position:relative;left:15%;" alt="Subscribe"> 
       </form>
       <br>
       <br>

    </div>
    <div style="position:relative; float: left; left: 3%; width: 23%; background-color:yellow; ">
        <center>
        <p style="font-size:30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            Pro Permanent Plan
        </p>
        <p style = "position: relative; font-size: 30px; left: 5px; width: 80%; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            $640/yr + $5 per use of API
            </p>
        </p>
        </center>
        <p style = "position: relative; left: 20%; width: 50%; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; width: 75%; text-overflow: scroll;">
            <span style="color:blue;">-Unlimited podcasts <br> -API key<br></span>
            <span style="color: red;">-Charged extra for each use of API</span>
        </p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="business" value="www.website.com"> 
            <input type="hidden" name="cmd" value="_xclick-subscriptions"> 
            <input type="hidden" name="item_name" value="Auto Podcast"> 
            <input type="hidden" name="item_number" value="Auto Podcast"> 
            <input type="hidden" name="currency_code" value="USD"> 
            <input type="hidden" name="a3" value="640.00">
            <input type="hidden" name="p3" value="1">
            <input type="hidden" name="t3" value="Y">
            <input type="hidden" name="src" value="1">
            <input type="image" name="submit" src="images/subscribe.png" width="70%;" style="position:relative;left:15%;" alt="Subscribe"> 
       </form>
       <br>
       <br>

    </div>
    <div style="position:relative; left:4%; background-color: lightsalmon; width: 23%; float: left; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        <center>
        <p style="position:relative; font-size: 30px;">
            Gold Permanent Plan
        </p>
        <p style = "position: relative; width: 50%; font-size: 30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            $5,000/yr
        </p>
        </center>
        <p style = "position: relative; left: 20%; width: 70%; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; width: 75%; text-overflow: scroll;">
            <span style = "color: blue;">
                -Unlimited Podcasts<br>
                -API key <br>
                - Unlimited API use with no extra charge
            </span>
        </p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="business" value="www.website.com"> 
            <input type="hidden" name="cmd" value="_xclick-subscriptions"> 
            <input type="hidden" name="item_name" value="Auto Podcast"> 
            <input type="hidden" name="item_number" value="Auto Podcast"> 
            <input type="hidden" name="currency_code" value="USD"> 
            <input type="hidden" name="a3" value="5000.00">
            <input type="hidden" name="p3" value="1">
            <input type="hidden" name="t3" value="Y">
            <input type="hidden" name="src" value="1">
            <input type="image" name="submit" src="images/subscribe.png" width="70%;" style="position:relative;left:15%;" alt="Subscribe"> 
       </form>
       <br>
       <br>

    </div>
    <p style = "position: relative; clear:left; left: 15%; width: 60%; padding-top: 5%; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        <span style = "color:blue;">If you choose the one-time purchase, we will generate one podcast for you. This costs $15 per podcast.<br></span>
        <span style = "color: green">If you purchase a beginner permanent plan, you may generate 1 podcast every month. You do not get access to our API, and must
        generate the podcast directly from our website. This costs $120 per year.</span><br>
        <span style="color:orange">If you purchase a pro permanent plan you get unlimited podcasts, and an API key. However, for every use of the API, you must pay an additional $5. The base price is $640 per year.<br></span>
        <span style = "color: red">If you purchase the gold permanent plan, you get unlimited podcasts and a key to our API with no additional charge for each use. This costs $5000 per year</span>
    </p>
    </body>
</html>