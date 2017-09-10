<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/main.css">
        <title>Add your receipt</title>
    </head>
    <body>
        <header>         
            <?php include 'menu.php';?>
            <h4>Your recipe!</h4>   
        </header>
        <div class="message"><?php echo isset($_SESSION["message"]) ? $_SESSION["message"] : "" ?></div>
        <div id="formMaker">
            <select v-model="selected">
                <option value="Name">Name</option>
                <option value="Ingredient">Ingredient</option>
                <option value="Preparation">Preparation</option>
                <option value="Time">Time</option>
                <option value="Image">Image</option>
            </select>
            <button id="add" type="button" element="">Add <span id="elementToAdd">{{ selected }}</span></button>
        </div>
        <form action="save.php" method="post" enctype="multipart/form-data">
            <div class="field" id="nameContainer"></div>
            <div class="field" id="ingredientContainer"></div>
            <div class="field" id="preparationContainer"></div>
            <div class="field" id="imageContainer"></div>
            <div class="field" id="cookingtimeContainer"></div>
            <div class="field" ><button type="submit">Save</button></div>            
        </form>
        <script type="text/javascript" src="js/main.js"></script>
        <script src="https://unpkg.com/vue"></script>
        <script type="text/javascript" src="js/formMaker.js"></script>        
    </body>
</html>
