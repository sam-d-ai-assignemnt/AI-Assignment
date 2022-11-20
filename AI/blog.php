<?php
session_start();
    
    include("functions.php");
    include("connection.php");

    $user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta name = "viewport" content = "width=device-width, initial-scale=1" >
        <title>
            Auto Podcast - Blog
        </title>
    </head>
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
        <h1 style = "position: relative; margin-top: 10%; color: black; font-size: 45px;">
            <center>
                Blog
            </center>
        </h1>
        <p style = "position: relative; left: 30%; width: 30%; font-size: 35px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            API Released - 24/11/2022
        </p>
        <p style = "position: relative; left: 20%; width: 50%; font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            Our API has been released. Our API allows you to use our AI in your websites and applications. To use it, you must purchase an <a href = "pricing.php">API key</a>.
            You must purchase at least a pro permanent plan for access to our API, though you will be charged $5 for each use of the API. Our
            API documentation is available <a href = "API.php#documentation">here.</a> Examples are shown <a href = "API.php#examples">here.</a>
            Our gold permanent plan is reccomended for applications and websites which wish to use our AI, and one-time purchases are reccomended
            for individuals.
            
        </p>
        <p style = "position:relative; left:30%; width: 30%; font-size: 35px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            AI Publically Available - 17/10/2022
        </p>
        <p style = "position: relative; left: 20%; font-size:20px; width: 50%; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            Our AI has been released. It produces podcasts based on user inputted data regarding their likes and dislikes in podcasts.
            Our AI trains by using a user rating system, where the user rates the podcast produced. This allows the AI to learn what people
            who like and dislike certain things want in a podcast. The AI is then used to create podcasts when it is used, and if users rate
            the podcast, this data is considered and the AI adapts accordingly.
        </p>

    </body>
</html>