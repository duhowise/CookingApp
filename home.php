<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conn = new mysqli("localhost", "root", "", "appetizing");
// Check connection
if ($conn->connect_error)
{
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    return;
}
$query = "SELECT * FROM recipe";
$recipes = array();
    // Perform queries 
$result = $conn->query($query);
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
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
    </head>
    <body>
        <header>            
            <?php include 'menu.php';?>
        </header>
        <p>Explore our cooking book and find your meal match.</p>
            
        <div class="parallax">
            <?php foreach($recipes as $recipe): ?>
            <a href="<?php echo "showrecipe.php?id=".$recipe['id'] ?>">
                <img src="<?php echo $recipe['image'] ?>" alt="recept" class="recept-img">
                <span class="image-title"><?php echo $recipe['name'] ?><br>
                    <span class="cooking-text"><img src="img/clock.png" alt="clock" class="clock">Cooking time:<?php echo $recipe['cookingtime']?></span>
                </span>                
            </a>
            <?php endforeach; ?>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
