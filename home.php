<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conn = new mysqli("localhost", "root", "", "appetizing");
// Check connection
if ($conn->connect_error) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    return;
}
$query = "SELECT * FROM recipe";
$recipes = array();
// Perform queries 
$result = $conn->query($query);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $recipes[] = $row;
    }
}
$conn->close();

?>
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
    <header>
        <?php include 'menu.php'; ?>
    </header>


    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <h3>Explore our cooking book and find your meal match.</h3>
                <div class="cards">
                    <?php foreach ($recipes as $recipe) : ?>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <img class="card-img-top" src="http://img.sndimg.com/food/image/upload/w_614,h_461,c_fit/v1/img/recipes/28/34/5/pic3nrdqS.jpg" alt="Recipe Image">
                                <h5 class="card-title"><?php echo $recipe['name']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $recipe['name'] ?></h6>
                                <p class="card-text"><?php echo $recipe['ingredients']; ?></p>
                                <a href="<?php echo "showrecipe.php?id=" . $recipe['id']; ?>" class="card-link">Read more...</a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/main.js"></script>

    </div>
</body>

</html>


<!-- <a href="<?php echo "showrecipe.php?id=" . $recipe['id'] ?>">
    <img src="<?php echo $recipe['image'] ?>" alt="recept" class="recept-img">
    <span class="image-title"><?php echo $recipe['name'] ?><br>
        <span class="cooking-text"><img src="img/clock.png" alt="clock" class="clock">Cooking time:<?php echo $recipe['cookingtime'] ?></span>
    </span>
</a> -->