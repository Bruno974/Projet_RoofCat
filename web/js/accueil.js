$(function () {
    $(".button-1").click(function (event) {
        event.preventDefault();
        var hash = this.hash;

        $('body').animate({scrollTop: $(hash).offset().top-70}, 900 , function(){window.location.hash = hash;})
    });
});