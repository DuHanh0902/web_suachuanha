$('.change_language span.language_en').hide();
$('.change_language').click(function () {
    $('.change_language span.language_vi').fadeToggle(100);
    $('.change_language span.language_en').fadeToggle(100);
});

$(window).scroll(function (e) {
    if ($(this).scrollTop() > $('body').offset().top) {
        $(".trangChu").show(100);
        $("header").addClass("sticky-top");
        $("#scrollTopBtn").css("display", "block");
    } else {
        $(".trangChu").hide(100);
        $("header").removeClass("sticky-top");
        $("#scrollTopBtn").css("display", "none");
    }
});


function render() {
    $(".trangChu").hide(100);
}

render();

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}