<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Appetizing</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <section class="main">            
            <div class="imgcontainer">
                <img src="img/logo.png" alt="logo" class="logo">
            </div>
            <form action="home.php">
                <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                        
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                        
                    <button id="log" type="submit">Login</button>
                </div>
            </form>
            <a href="account.php" class="createlink">Create new account</a>
        </section>       
    </body>
</html>
