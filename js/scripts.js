(window.onload = function() {
    var burger = jQuery('#burger');
    var mobileNav = document.getElementById('mobileNav');
    var slideIndex = 0;
    var slides = document.getElementsByClassName("mySlides");
    
    var navHideShow = function() {
        mobileNav.className.indexOf("w3-show") === -1 ?
            mobileNav.className += " w3-show" : 
            mobileNav.className = mobileNav.className.replace(" w3-show", "");
    };
    var slideDivs = function(n) {
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (var i=0; i <= slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex].style.display = "block";
    };
    
    burger.click(function() {
        navHideShow();
    });
});