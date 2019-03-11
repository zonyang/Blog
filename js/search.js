define(['jquery'], function ($) {

    $(function () {
        let searchFlag = true, navFlag = true;
        const $searchInput = $("#search_input");
        const $bigNav = $("#big_nav");
        $("#search_btn").on("click", function () {
            if (searchFlag) {
                $searchInput.show().animate({width: 100});
            } else {
                $searchInput.animate({width: 0}, function () {
                    $searchInput.hide();
                });
            }
            searchFlag = !searchFlag;
        });
        $("#small_nav").on("click", function () {
            if (navFlag) {
                $bigNav.show().animate({height: 216});
            } else {
                $bigNav.animate({height: 0}, function () {
                    $bigNav.hide();
                });
            }
            navFlag = !navFlag;
        })
    });
});