$(document).ready(function() {

    //MANAGER TOGGLE
    $('.manager-toggler').on("click", function(e) {
        e.preventDefault();
        $(".manager-content").toggleClass("hidden");
    });
    //PERIOD TOGGLE
    $('.period-toggler').on("click", function(e) {
        e.preventDefault();
        $(".period-content").toggleClass("hidden");
    });

});
