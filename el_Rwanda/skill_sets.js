(function (){
    "use strict";

    document.addEventListener("DOMContentLoaded", function() {
        let techBtn = document.getElementById("techBtn");
        let skillBtn = document.getElementById("skillBtn");
        let barrierBtn = document.getElementById("barrierBtn");
        let searchButton = document.getElementById("searchButton");
      
        techBtn.addEventListener("click", function() {
          window.location.href = "tech.html";
        });
        skillBtn.addEventListener("click", function() {
          window.location.href = "skills.html";
        });
        barrierBtn.addEventListener("click", function() {
          window.location.href = "barrier.html";
        });
      
        // Binding the openPage function to the Search button click event
        searchButton.addEventListener("click", openPage);
    });
      
      function openPage(event) {
        event.preventDefault();
      
        let search = document.getElementById("search").value.toLowerCase();
      
        if (search === "tech" || search === "html" || search === "css" || search === "github") {
          window.open("tech.html");
        } else if (search === "skills" || search === "beyond classrooms" || search === "creativity" || search === "anti drugs"){
          window.open("skills.html");
        } else if (search === "Breaking Barriers" || search === "gender" || search === "menstruation") {
          window.open("barrier.html");
        } else {
          alert("Page not found for the entered search term.");
        }
      }
      
}());
