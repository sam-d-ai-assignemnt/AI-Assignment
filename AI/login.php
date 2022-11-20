<?php
session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);
    

?>
<!DOCTYPE html>
<html lang =  "en">
    <head>
        <meta name = "viewport" content = "width=device-width, initial-scale=1" >
        <style>
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

            body{
                background-color:beige;
            }
            .text{
                background-color: white;
                border-style: solid;
                border-color: black;
                width: 96%;
                left:0;
                min-height:50px;
                border-radius:10px;
            }
            #box{
                background-color: lightgrey;
                width: 20%;
                position: relative;
                left: 40%;
                margin-top:10%;
            }
            #signup{
                position: relative;
                left:40%;
                width:20%;
            }
            #button{
                background-color:lightblue;
                border-radius:10px;
                min-height:50px;
                width:50%;
            }
        </style>
        <title>
            Login
        </title>
        <link rel = "icon" href = "images/favicon.jpg">
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

        <div id = "box">
            <center>
                <p style = "font-size:25px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    Log in
                </p>
            </center>
            <form method = "post">
                <input class = "text" type = "text" name = "username" placeholder="username"><br><br>
                <input class = "text" type = "password" name = "password" placeholder="password"><br><br>
                <center><input id = "button" type = "submit" value = "Login"><br><br></center>
            </form>
        </div>
        <p style = "position: relative; left: 39%; width: 20%; color: red;">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $user_name =  $_POST['username'];
                $password = $_POST['password'];
                if (!empty($user_name) and !(empty($password)))
                {
                    //read from database
                    $user_id = random_num(20);
                    $query = "select * from users where user_name = '$user_name' limit 1";
                    $result = mysqli_query($con, $query);
                    
                    if ($result)
                    {
                        if (mysqli_num_rows($result) > 0)
                        {
                            $user_data = mysqli_fetch_assoc($result);
                            
                            if ($user_data['password'] === $password)
                            {
                                $_SESSION['user_id'] = $user_data['user_id'];
                                header("Location: index.php");
                                die;
                            }
                            else
                            {
                                echo "incorrect username or password";
                            }
                        }
                        else
                        {
                            echo "incorrect username or password";
                        }
                    }
                    else{
                        echo "incorrect username or password";
                    }
                    
                }
                else
                {
                }
            }
        
        ?>
        </p>
        
        <a href = "signup.php"><br><br>
            <p id = "signup">
                Sign up instead
            </p>
        </a>
    </body>
</html>