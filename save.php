<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$name = $_POST['recipe_name'];
$prep = $_POST['preparation'];
$image = $_FILES['recipe_image'];
$ingredients = $_POST['ingredients'];
$cookingtime = $_POST['cookingtime']; 
if(!empty($name) && !empty($prep) && !empty($ingredients) && !empty($image) && !empty($cookingtime))
{
    $con = mysqli_connect("localhost","root","","appetizing");
    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      die;
    }
    $imagePath = "img/".$image['name'];
    if(!move_uploaded_file($image['tmp_name'], $imagePath))
    {
        die('Error uploading file - check destination is writeable.');
    }
    $ingr = implode("_", $ingredients);
    $query = sprintf("INSERT INTO recipe (name, ingredients, preparation, image, cookingtime) VALUES ('%s', '%s', '%s', '%s', '%s')", $name, $ingr, $prep, $imagePath, $cookingtime);
    echo $query;
    // Perform queries 
    $isOk = mysqli_query($con, $query);
    mysqli_close($con);
}
else
{
    die('Please set all the fields!');
}
if($isOk)
{
    $_SESSION["message"] = sprintf("The recipe %s was saved", $name);
    header('Location: addrecipe.php');    
}
else
{
   $_SESSION["message"] = sprintf("The recipe %s was not saved", $name);
    header('Location: addrecipe.php');
}