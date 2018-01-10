(window.onload = function() {
    var burger = jQuery('#burger');
    var mobileNav = document.getElementById('mobileNav');
    var projects = jQuery('.project');
    
    var highlightText = jQuery('.highlighttext');
    var highlightColors = [
        '#29E7EF',
        '#EE8524',
        '#C3FF68',
        '#FF9900',
        '#F02311',
        '#025D8C',
        '#800F25',
        '#A40802',
        '#7F94B0',
        '#F0D878'
    ];
    function getRndInteger(min, max) {
        return Math.round(Math.random() * (max - min) ) + min;
    }
    var highlightColor = highlightColors[getRndInteger(0, highlightColors.length - 1)];
    highlightText.each(function() {
        this.style.color = highlightColor;
    });
    
    var navHideShow = function() {
        mobileNav.className.indexOf("w3-show") === -1 ?
            mobileNav.className += " w3-show" : 
            mobileNav.className = mobileNav.className.replace(" w3-show", "");
    };
    
    burger.click(function() {
        navHideShow();
    });
    
    projects.click(function() {
        var project = jQuery('#' + this.dataset.modal);
        var slides = project.find('.slide');
        var slideIndex = 0;
        var leftButton = project.find('button.w3-display-left');
        var rightButton = project.find('button.w3-display-right');
        var showSlide = function() {
            slides.each(function() {
                jQuery(this).hide();
            });
            slides.eq(slideIndex).show();
        };
        
        project.modal({ observeChanges: true }).modal('show');
        showSlide();
        leftButton.click(function() {
            slideIndex -= 1;
            if (slideIndex < 0) {
                slideIndex = slides.length - 1;
            }
            showSlide();
        });
        rightButton.click(function() {
            slideIndex += 1;
            if (slideIndex > slides.length - 1) {
                slideIndex = 0;
            }
            showSlide();
        });
    });
});