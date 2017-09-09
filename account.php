<!DOCTYPE html>

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
                    <label><b>E-mail</b></label>
                    <input type="text" placeholder="Enter E-mail" name="mail" required>
                    
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                    
                    <button id="log" type="submit">Sign in</button>
                </div>
            </form>
        </section> 
    </body>
</html>
