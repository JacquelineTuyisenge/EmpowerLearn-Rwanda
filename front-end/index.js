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

//    // JavaScript to handle switching between login and signup forms
//    document.addEventListener("DOMContentLoaded", function() {
//     var loginLink = document.querySelector('.Login');
//     var loginModal = document.getElementById('loginModal');
//     var switchToSignup = document.getElementById("switchToSignup");
//     var switchToLogin = document.getElementById("switchToLogin");
//     var closeBtn = document.querySelector("#loginModal .close");
//     var loginForm = document.getElementById("loginForm");
//     var signupForm = document.getElementById("signupForm");

//     function toggleLoginModal() {
//         loginModal.classList.toggle('hidden');
//     }

//     if (loginLink) {
//         loginLink.addEventListener('click', function(event) {
//             event.preventDefault();
//             toggleLoginModal();
//         });
//     }

//     if (switchToSignup) {
//         switchToSignup.addEventListener("click", function(event) {
//             event.preventDefault();
//             loginForm.style.display = "none";
//             signupForm.style.display = "block";
//         });
//     }

//     if (switchToLogin) {
//         switchToLogin.addEventListener("click", function(event) {
//             event.preventDefault();
//             signupForm.style.display = "none";
//             loginForm.style.display = "block";
//         });
//     }

//     if (closeBtn) {
//         closeBtn.addEventListener("click", function(event) {
//             event.preventDefault();
//             loginModal.classList.add('hidden');
//         });
//     }
// });



    

//     // var links = document.querySelectorAll(".itemLinks");
//     // var wrapper = document.querySelector("#wrapper");

//     // var activeLink = 0;

//     // for(var i = 0; i < links.length; i++){
//     //     var link = links[i];
//     //     link.addEventListener('click', setClickedItem, false);

//     //     link.itemID = i;
//     // }

//     // links[activeLink].classList.add("active");

//     // function setClickedItem(e){
//     //     removeActiveLinks();

//     //     var clickedLink = e.target;
//     //     activeLink = clickedLink.itemID;

//     //     changePosition(clickedLink);
//     // }

//     // function removeActiveLinks(){
//     //     for (var i = 0; i <links.length; i++){
//     //         links[i].classList.remove("active");
//     //     }
//     // }

//     // function changePosition(link){
//     //     var position = link.getAttribute("data-pos");

//     //     var translateValue = "translate3d(" + position + ", 0px, 0)";
//     //     wrapper.style.transform = translateValue;

//     //     link.classList.add("active");
//     // }

})();
