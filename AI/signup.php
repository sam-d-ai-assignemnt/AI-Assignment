<?php
session_start();

    include("connection.php");
    include("functions.php");
    $user_data = false;

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name =  $_POST['username'];
        $password = $_POST['password'];
        if (!empty($user_name) and !(empty($password)))
        {
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            mysqli_query($con, $query);
            header("Location: login.php");
            die;
        }
        else
        {
            echo "Please enter some valid information";
        }
    }
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta name = "viewport" content = "width=device-width, initial-scale=1" >
        <title>
            Sign up
        </title>
        <style>
            body{
                background-color: beige;
            }
            #box{
                    background-color: lightgrey;
                    width: 20%;
                    position: relative;
                    left: 40%;
                    margin-top:10%;
                }
                #login-instead{
                    position: relative;
                    left:40%;
                    width:20%;
                }
                .text{
                background-color: white;
                border-style: solid;
                border-color: black;
                width: 96%;
                left:0%;
                min-height:50px;
                border-radius:10px;
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
        #button{
            background-color:lightblue;
            border-radius:10px;
            min-height:50px;
            width:50%;
        }



        </style>
    </head>
    <body>
        <script src = "heading.js"></script>
        <div id = "container">
                <a href = "index.php">
                    <img src = "images/icon.jpg" height="50px" id = "icon">
                </a>
                <h1 id = "name">
                </h1>
                <a href = "login.php">
                    <h1 id = "login" onmouseover = "showLogin()" onmouseout = "hideLogin();">                            
                        Log in
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
        <div id = "box">
            <center>
                <p style = "font-size:25px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                        Sign up
                </p>
            </center>
            <form method = "post">
                <input class = "text" type = "text" name = "username" placeholder = "username"><br><br>
                <input class = "text" type = "password" name = "password" placeholder = "password"><br><br>
                <center><input id = "button" type = "submit" value = "Sign up" ><br><br></center>
            </form>
    
        </div>
        <a href = "login.php" id = "login-instead"><br><br>
                    Login instead
                </a>
    </body>
</html>