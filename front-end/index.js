(function(){
    "use strict";
    // active scroll on nav links

    window.addEventListener('DOMContentLoaded', () => {
        const sections = document.querySelectorAll('main > div');
        const navLinks = document.querySelectorAll('nav ul li a');

        window.addEventListener('scroll', () => {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 50;
                if (window.pageYOffset >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === current) {
                    link.classList.add('active');
                }
            });
        });
    });

    // var links = document.querySelectorAll(".itemLinks");
    // var wrapper = document.querySelector("#wrapper");

    // var activeLink = 0;

    // for(var i = 0; i < links.length; i++){
    //     var link = links[i];
    //     link.addEventListener('click', setClickedItem, false);

    //     link.itemID = i;
    // }

    // links[activeLink].classList.add("active");

    // function setClickedItem(e){
    //     removeActiveLinks();

    //     var clickedLink = e.target;
    //     activeLink = clickedLink.itemID;

    //     changePosition(clickedLink);
    // }

    // function removeActiveLinks(){
    //     for (var i = 0; i <links.length; i++){
    //         links[i].classList.remove("active");
    //     }
    // }

    // function changePosition(link){
    //     var position = link.getAttribute("data-pos");

    //     var translateValue = "translate3d(" + position + ", 0px, 0)";
    //     wrapper.style.transform = translateValue;

    //     link.classList.add("active");
    // }

})();
