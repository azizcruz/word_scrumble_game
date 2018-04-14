$(function () {

    $(".start-game, .choose-player, .add-word, .play-game, .result").addClass("animated rollIn");
    $(".main-table").addClass("animated zoomIn");
    $(".mybtn, .mybtn2, .mybtn3, .player-form i, .add").addClass("animated bounceInUp");
    $(".success").addClass("animated bounceIn");
    $(".round").addClass("animated zoomInDown");
    $(".instruc").addClass("animated bounceInDown");

    $(".round").delay(2000).fadeOut();
    $(".instruc i").click(function () {
        $(".instruc").fadeOut(300);
    });

    $(".mybtn").click(function () {
        $(".start-game, choose-player").addClass("animated rollOut");
        $("button").addClass("animated bounceInUp");
    });

    $("#show-insert").click(function () {
        $(".insert-word").show();
    });


    $(".mybtn").on("mouseenter", function () {
        $(".btn i").addClass("animated rubberBand");
        $("span").addClass("animated jello");
        $(this).mouseleave(function () {
            $("i").removeClass("animated rubberBand");
        });
    });

    var $div2blink = $("#divtoBlink"); // Save reference, only look this item up once, then save
    var backgroundInterval = setInterval(function () {
        $div2blink.toggleClass("blink");
    }, 500);

    $('[placeholder]').focus(function () {
        //take value of place holder and cashe it in data-text
        $(this).attr('data-text', $(this).attr('placeholder'));
        $(this).attr('placeholder', ''); //empty the input

    }).blur(function () {
        //put the value of data-text in the place holder when blur
        $(this).attr('placeholder', $(this).attr('data-text'));
    });

    $(".mybtn2").click(function () {
        if ($("input[type='text']").val() != '') {
            $(".choose-player").addClass("animated rollOut");
        }
    });

    $(".confirm").click(function () {
        return confirm("Are You Sure You Want To Delete This Word?");
    });



});
