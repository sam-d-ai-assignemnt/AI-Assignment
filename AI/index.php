<?php
session_start();
    
    include("functions.php");
    include("connection.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang = "en">
    <style>
        html{
            width:100%;
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
        <meta name = "viewport" content = "width=device-width, initial-scale=1" >
        <title>
            Auto Podcast AI
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
        </h1>
        <h1 style="position:relative; left:20%; width: 50%;font-size: 70px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding-top:10%;">
            Create tailored podcasts in
            <span style="position:relative; font-size: inherit; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: brown;">
                seconds
            </span>
        </h1>
        <p style = "position: relative; font-size: 30px; left: 20%; width: 60%; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                The ultimate AI powered podcast generator. Perfect for quickly making the perfect podcast for a friend or family member. Simply provide a list of
                podcasts they like and dislike and our AI will generate the perfect podcast for them.
        </p>

        <h2 style = "position:relative; left: 20%; width: 50%; font-size: 40px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            How it works
        </h2>
        <p style="position:relative; left:20%; font-size:20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black; width: 70%;">
            Our AI is given a database of the user's likes and dislikes. This can be provided as two lists of podcasts by their names, or as
            two lists containing the podcast's audio files. If the name is provided, the most popular podcast of that name will be used. The AI
            listens to it and converts it into a script. This is then read and themes are identified. This is repeated for all the user's likes
            and dislikes. The themes are then given to another AI model, which determines what themes the user likes and dislikes. This is then
            inputted to another AI which returns a script for a new podcast. This is then converted to an audio file with a text to speech AI.
            This audio file is then returned to the user.
        </p>
        <h2 style = "position:relative; left: 20%; width: 60%; font-size: 40px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            Implimentation
        </h2>
        <p style="position:relative; left:20%; font-size:20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:black; width: 70%;">
            Our AI can be used by indiviudals or companies. For a paying individual to create a podcast, they must input a list of podcasts
            they like and a list of podcasts they dislike, and the AI will do the rest! For a company to add this AI as a feature, they must 
            use our API. Note that companies must purchase our API key. Our API documentation is available <a href = "API.php#documentation">here</a>.
        </p>
    </body>
</html>