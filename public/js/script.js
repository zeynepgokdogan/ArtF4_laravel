function toggleNavbar() {
    var navbarLinks = document.querySelector('.navbar-links');
    navbarLinks.classList.toggle('active');
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("button_hp1").addEventListener("click", function() {
        window.location.href = "about_me.html";
    });

    document.getElementById("button_hp2").addEventListener("click", function() {
        window.location.href = "contact.html";
    });
});