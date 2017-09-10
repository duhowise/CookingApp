/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var menuBtn = document.getElementById("menu-btn");

menuBtn.addEventListener("click", function(){
  
    var innerDiv = document.getElementById("resp-menu");
    
    if(innerDiv.className == "responsive-menu expand")
    {
        innerDiv.className = "responsive-menu";
        window.setTimeout(function(){
            innerDiv.className = "rensonsive-menu close";
        }, 1000);
    }
    else
    {
        innerDiv.className = "responsive-menu expand";
    }    
    if(this.className == "menu-btn btn-none")
    {
        this.className = "menu-btn";
    }
    else
    {
        this.className = "menu-btn btn-none";
    }
});
