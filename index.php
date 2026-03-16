<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Login</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /*button animation*/

        #menu1 li:hover {
            background: #2c7ad6;
            color: white;
        }

        #menu1 li {
            background: white;
            padding: 10px 15px;
            color: black;
            border-radius: 5px;
            transition: 0.3s;
        }
        /* Top Contact Bar */
        #top {
            background-color: #2c7ad6;
            padding: 10px;
            color: white;
            text-align: left;
        }

        #top a {
            margin-right: 20px;
            color: white;
            text-decoration: none;
            font-size: 14px;
            padding: 15px 30px;
        }
        /* Header / Menu Bar */
        #menu {
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 30px;
        }

        #logo {
            font-size: 28px;
            font-weight: bold;
            color: #333;

        }

        #menu1 ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        #menu1 ul a {
            color: #2c7ad6;
            text-decoration: none;
            font-size: 16px;
        }

        #menu1 ul li {
            cursor: pointer;
            padding: 5px 10px;
        }



        
        body {
            font-family: Arial, sans-serif;
            background-image: url('litera.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

       

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 40px 20px;
        }

        .form-wrapper {
            background: rgba(255, 255, 255, 0.95);
            max-width: 500px;
            width: 100%;
            padding: 50px 30px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .form-wrapper h3 {
            text-align: center;
            color: #2c7ad6;
            margin-bottom: 25px;
            font-size: 24px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label,
        .form-wrapper label {
            display: block;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        .form-wrapper input[type="submit"] {
            background-color: #2c7ad6;
            color: white;
            font-weight: bold;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .form-wrapper input[type="submit"]:hover {
            background-color: #1b5fa0;
        }

       /* Bottom / Contact Section */
        #down {
            background-color: #2c7ad6;
            color: white;
            text-align: center;
            padding: 20px 10px;
        }

        #down h3,
        #down h2 {
            margin-bottom: 10px;
        }

        #down a {
            display: inline-block;
            margin: 5px;
            color: white;
            font-size: 14px;
        }

        /* Footer */
        .footer {
            background-color: #1b5fa0;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div id="top">
            <a href="#" class="fa fa-envelope" style="text-decoration:none:color:white;">
                ainee6588@gmail.com
            </a>
            <a href="#" class="fa fa-phone" style="text-decoration:none:color:white;">
                +91-0730
            </a>
            <a href="#" class="fa fa-facebook" style="text-decoration:none;padding:7px;float:right;color:white;"></a>
            <a href="#" class="fa fa-instagram" style="text-decoration:none;padding:7px;float:right;color:white;"></a>
            <a href="#" class="fa fa-twitter" style="text-decoration:none;padding:7px;float:right;color:white;"></a>
        </div>
        <div id="menu">
            <div id="logo">
                <img src="images/logo.PNG" alt="Library Logo" style="height: 50px;">
            </div>

            <div id="menu1">
                <ul>
                    <a href="First.html">
                        <li class="fa fa-home">Home</li>
                    </a>
                    <a href="Admin.html">
                        <li class="fa fa-user">Admin Login</li>
                    </a>
                    <a href="index.php">
                        <li class="fa fa-user">Student Login</li>
                    </a>
                </ul>
            </div>
        </div>
    <?php
    $emailmsg = $pasdmsg = $msg = $ademailmsg = $adpasdmsg = "";

    if (!empty($_REQUEST['ademailmsg'])) $ademailmsg = $_REQUEST['ademailmsg'];
    if (!empty($_REQUEST['adpasdmsg'])) $adpasdmsg = $_REQUEST['adpasdmsg'];
    if (!empty($_REQUEST['emailmsg'])) $emailmsg = $_REQUEST['emailmsg'];
    if (!empty($_REQUEST['pasdmsg'])) $pasdmsg = $_REQUEST['pasdmsg'];
    if (!empty($_REQUEST['msg'])) $msg = $_REQUEST['msg'];
    ?>

    <div class="form-container">
        
        <div class="form-wrapper">
            <h3>Student Login</h3>
            <form action="login_server_page.php" method="get">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="login_email" placeholder="Your Email *" />
                    <label style="color:red">*<?php echo $emailmsg ?></label>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="login_pasword" placeholder="Your Password *" />
                    <label style="color:red">*<?php echo $pasdmsg ?></label>
                </div>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>


    <div id="down">
            <h3>Stay connected</h3>
            <a href="#" class="fa fa-facebook" style="text-decoration:none;padding:10px 12px;color:white;"></a>
            <a href="#" class="fa fa-instagram" style="text-decoration:none;padding:10px 12px;color:white;"></a>
            <a href="#" class="fa
             fa-twitter" style="text-decoration:none;padding:10px 12px;color:white;"></a>
            <h2>Contact Address</h2>
            <a href="#" class="fa fa-home" style="text-decoration:none;padding:10px 12px;color:white;"></a>
            City: Kot Radha Kishen,post:abc
            </a><br>
            <a href="#" class="fa fa-phone" style="text-decoration:none;padding:10px 12px;color:white;"></a>
            +91-0730
            </a><br>
            <a href="#" class="fa fa-envelope" style="text-decoration:none;padding:10px 12px;color:white;"></a>
            ainee6588@gmail.com
            </a>
        </div>
        <div class="footer">Developed By:........</div>
    </div>


</body>

</html>
