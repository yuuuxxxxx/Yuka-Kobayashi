$(function(){

        var devicewidth = $(window).width();
        var deviceSm = 767;

        if (devicewidth <= deviceSm) {
            $(".phone-contact").addClass("hidden");
            $(".navmenu").addClass("hidden");
            $(".Hamburger").addClass("show");
        } else {
            $(".Hamburger").removeClass("show");
            $(".Hamburger").addClass("hidden");
            $(".phone-contact").removeClass("hidden");
        }
        $(".Hamburger").click(function(){
            if ($("#Menu").hasClass("hidden")){
                $(".HamburgerWrapper").removeClass("hidden");
                $(".HamburgerWrapper").addClass("show");
            } else {
                $(".HamburgerWrapper").addClass("hidden");
                $(".HamburgerWrapper").removeClass("show");
            }
        })
    });