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
<h1><?php echo $recipe['name'] ?></h1>
<h1><?php echo $recipe['ingredients'] ?></h1>
<h1><?php echo $recipe['preparation'] ?></h1>