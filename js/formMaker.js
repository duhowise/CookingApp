/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
new Vue({
    el: '#formMaker',
    data: {
        selected: ''
    }
});
            
var addBtn = document.getElementById("add");
var i=1;
var nameSpace = document.getElementById("nameContainer");
var ingredientSpace = document.getElementById("ingredientContainer");
var prepSpace = document.getElementById("preparationContainer");
var imageSpace = document.getElementById("imageContainer");
var cookingtimeSpace = document.getElementById("cookingtimeContainer");
addBtn.addEventListener("click", function(){                               
    var element = document.getElementById("elementToAdd").innerHTML;
    if(element == "")
    {
        return;
    }
    if(element == "Preparation" && document.getElementsByName("preparation").length == 0)
    {
        var textarea = document.createElement("textarea");
        textarea.name = "preparation";
        textarea.id = element;
        textarea.rows = 5;
        textarea.placeholder = "Describe your recipe";
        var label = document.createElement("label");
        label.innerHTML = element;
        label.for = textarea.id;
        prepSpace.append(label);
        prepSpace.append(textarea);
    }
                
    if(element == "Name" && document.getElementsByName("recipe_name").length == 0)
    {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "recipe_name";
        input.id = element;
        input.placeholder = "Example: Lasagne";
        var label = document.createElement("label");
        label.innerHTML = element;
        label.for = input.id;
        nameSpace.append(label);
        nameSpace.append(input);       
    }
    if(element == "Ingredient")
    {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "ingredients[" + i + "]";
        input.placeholder = "Ingredient : quantity";
        input.id = element + "_" + i;
        var label = document.createElement("label");
        label.innerHTML = element + " " + i;
        label.for = input.id;
        i++;
        ingredientSpace.append(label)
        ingredientSpace.append(input);
    }
    
    if(element == "Image" && document.getElementsByName("recipe_image").length == 0)
    {
        var input = document.createElement("input");
        input.type = "file";
        input.name = "recipe_image";
        var label = document.createElement("label");
        label.innerHTML = element;
        imageSpace.append(label);
        imageSpace.append(input);
    }
    if(element == "Time" && document.getElementsByName("cookingtime").length == 0)
    {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "cookingtime";
        var label = document.createElement("label");
        input.placeholder = "Exemple: 10 min";
        label.innerHTML = element;
        imageSpace.append(label);
        imageSpace.append(input);
    }
    
}); 

