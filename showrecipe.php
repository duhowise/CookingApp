<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$id) {
    return;
}
$conn = new mysqli("localhost", "root", "", "appetizing");
// Check connection
if ($conn->connect_error) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    return;
}
$query = "SELECT * FROM recipe WHERE id=" . $id;
$recipe = array();
// Perform queries 
$result = $conn->query($query);
if ($result->num_rows == 1) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
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
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">

</head>

<body>
    <header>
        <?php include 'menu.php'; ?>
    </header>
    <div class="card text-center">
        <div class="card-header">
            <?php echo $recipe['name'] ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Ingredients</h5>
            <?php $ingredients = explode('_', $recipe['ingredients']) ?>
            <?php foreach ($ingredients as $ingredient) : ?>
                <p class="card-text"><?php echo $ingredient ?></p>
            <?php endforeach ?>
        </div>
        <div class="card-footer text-muted">
            Cooking time: <?php echo $recipe['cookingtime'] ?>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>