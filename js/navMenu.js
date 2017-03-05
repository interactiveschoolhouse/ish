(function() {
    var $body = $("body");

    $body.append("<div class='nav-menu__overlay'></div>");

    var $menu = $(".site-nav__menu");
    var $menuOverlay = $(".nav-menu__overlay");
    $(".nav-menu__expander").click(function(){
        $menu.toggleClass("menu--expanded");
        $menuOverlay.toggleClass("menu--expanded");

        $body.disableScroll();        
    });

    $menuOverlay.click(function(){
        closeMenu();
    });

    $(".nav-menu__close").click(function(){
        closeMenu();
    });

    function closeMenu() {
        $menu.toggleClass("menu--expanded");
        $menu.toggleClass("menu--collapsing");
        $menuOverlay.toggleClass("menu--collapsing");
        setTimeout(function(){
            $menu.toggleClass("menu--collapsing");
            $menuOverlay.toggleClass("menu--collapsing");
            $menuOverlay.toggleClass("menu--expanded");
            $body.enableScroll();        
        }
        , 500);
    }

    $.fn.disableScroll = function() {
        window.oldScrollPos = $(window).scrollTop();

        $(window).on('scroll.scrolldisabler',function ( event ) {
            $(window).scrollTop( window.oldScrollPos );
            event.preventDefault();
        });
    };

    $.fn.enableScroll = function() {
        $(window).off('scroll.scrolldisabler');
    };


})();