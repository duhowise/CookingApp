<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appetizing</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <img id="indexImage" class="d-block mx-auto mb-4" src="img/logo.png" alt="logo" class="logo">
            <div class="col-8 offset-2">
                <form action="home.php" method="post">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input id="email" class="form-control" placeholder="enter email" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" placeholder="enter username" class="form-control" type="text" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" placeholder="enter password" class="form-control" type="password" name="password">
                    </div>

                    <button class="signInButton btn btn-primary" type="submit">Sign-in</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>