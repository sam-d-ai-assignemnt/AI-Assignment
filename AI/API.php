<?php
session_start();
    
    include("functions.php");
    include("connection.php");

    $user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name = "viewport" content = "width=device-width, initial-scale=1" >
        <title>
            Auto Podcast - API
        </title>
    </head>
    <style>
        html{
            width: 100%
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
            Auto Podcast AI - API
        </title>
        <link rel = "icon"; href = "images/favicon.jpg">
    </head>
    <body onload = "python();">
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
            <p id = "documentation"style = "position:relative; left: 20%; width: 60%; padding-top: 10%; font-size: 20px;">
                <span style = "font-size: 30px;">Documentation</span><br>
                To produce a podcast, our API is available at www.api.website.com. You must send a request to the website to get the podcast
                The request must be an http get request. The body must be two lists, the first being podcasts they like, and the second being
                podcasts they dislike. The podcasts can be in the form of the podcast titles if they are publicly available, though the most
                popular podcast with that name will be used, so it may be different to the podcast you are meaning. The podcasts can 
                alternatively be audio files to negate this risk. <br>
                The variable <span style = "background-color: aquamarine;">likes</span> is the list of podcasts they like, and the variable
                <span style = "background-color:goldenrod;">dislikes</span> represents the list of podcasts they dislike.<br><br>
                If it is succesful, it will return an audio file, and if it is unsuccesful, it will throw the error "No valid API key provided". 
                To provide a key, pass this variable as a header. If the key is valid, it will be succesful. <br> <br>
            </p>
            <script src = "examples.js"></script>
            <div id = "examples" style = "position: relative; left: 20%; width: 60%;">
                <p style="background-color:beige; font-size: 30px; font-weight: bold;">
                    Examples
                </p>
                <button id = "py" style = "position: relative; float: left; background-color: inherit; border-style: solid; border-radius: 10px; min-height: 50px;; width: 15%; font-size: 20px;" onclick="python();" onmouseover = "showpy();" onmouseout = hidepy();>
                    python
                </button>
                <button id = "java" style = "position: relative; left: 2%; float: left; background-color: inherit; border-style: solid; border-radius: 10px; min-height: 50px;; width: 15%; font-size: 20px; z-index: inherit;" onclick="java();" onmouseover = "showjava();" onmouseout = hidejava();>
                    java    
                </button>
                <button id = "js" style = "position: relative; left: 3%; float: left; background-color: inherit; border-style: solid; border-radius: 10px; min-height: 50px; width: 15%; font-size: 20px; z-index: inherit;" onclick = "javascript();" onmouseover="showjs();" onmouseout="hidejs();">
                    Javascript
                </button>
                <br><br><br>
                <div id = "code-container" style="background-color: black;">
                    <code id = "code" style="clear:left; float: bottom; position: relative; margin-top:50%; background-color: black; color:lightgreen; z-index: inherit;">
                    </code>
                </div>
                
            </div>
    </body>
</html>