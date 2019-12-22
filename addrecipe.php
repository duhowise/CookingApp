<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <title>Add your recipe</title>
</head>

<body>


    <div>
        <?php include 'menu.php'; ?>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h4>Your recipe!</h4>
                <form action="">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>

                    <div class="form-group">
                        <label for="ingredients">Ingredients</label>
                        <input id="ingredients" class="form-control" type="text" name="ingredients">
                    </div>
                    <div class="form-group">
                        <label for="preparation">Preparation</label>
                        <input id="preparation" class="form-control" type="text" name="preparation">
                    </div>
                    <div class="form-group">
                        <label for="time">Time (in minutes)</label>
                        <input id="time" class="form-control" type="text" name="time">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input id="image" class="form-control-file" type="file" name="image">
                    </div>
                    <button class=" signInButton btn btn-primary" name="submit" type="submit">Add Recipe</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>