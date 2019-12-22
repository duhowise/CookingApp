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
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>

<body>
    <div class="container ">
        <div class="row">
            <img class="d-block mx-auto mb-4" id="indexImage" src="img/logo.png" alt="logo">
            <div class="col-8 offset-md-2">
                <form action="home.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" class="form-control" type="text" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password" required>
                    </div>
                    <button class="signInButton btn btn-primary" type="submit">Login</button>
                </form>
                <br>
                <a href="account.php" class="createlink">Create new account</a>
            </div>
        </div>
    </div>
</body>

</html>