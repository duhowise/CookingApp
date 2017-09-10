<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id = isset($_GET['id'])? $_GET['id'] : null;

if(!$id)
{
    return;
}
$conn = new mysqli("localhost", "root", "", "appetizing");
// Check connection
if ($conn->connect_error)
{
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    return;
}
$query = "SELECT * FROM recipe WHERE id=".$id;
$recipe = array();
    // Perform queries 
$result = $conn->query($query);
if ($result->num_rows == 1) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        $recipe = $row;
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
        <title>Recipe - <?php echo $recipe['name'] ?></title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <header>            
            <?php include 'menu.php';?>
        </header>
        <h4><?php echo $recipe['name'] ?></h4>
        <figure>
            <img src="<?php echo $recipe['image'] ?>" alt="recept" class="recept-img">
        </figure>
        <section>
            <p>Cooking time: <?php echo $recipe['cookingtime'] ?></p>
            <h5>Ingredients:</h5>
            <?php $ingredients = explode('_', $recipe['ingredients'])?>
            <ul class="ingredient-list">
                <?php foreach($ingredients as $ingredient): ?>
                <li><?php echo $ingredient ?></li>
                <?php endforeach; ?>
            </ul>
            <h5>Preparation:</h5>
            <p class="preparation">
            <?php echo $recipe['preparation'] ?>
            </p>
        </section>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
