$(document).ready(function () {
    $(".photo_card").click(function () {
        $(".photo_card__overlay").css("display", "none");

        $("#lightbox").fadeIn();
    });
    $("#closeButton").click(function () {
        $("#lightbox").css("display", "none");
        $("#lightbox").fadeOut();
        $(".photo_card__overlay").css("display", "block");
    });
    let nbImg = 0;
    $(".photo_slider .container-images img").each(function () {
        nbImg += 1;
    });

    $(".photo_slider .arrow").click(function () {
        let n = imageActive();

        $(".photo_slider").removeClass("right left");

        if ($(this).hasClass("left")) {
            n -= 1;
            $(".photo_slider").addClass("left");
            setTimeout(function () {
                $(".photo_slider .container-images img.active").addClass("to_left");
            }, 50);
        } else if ($(this).hasClass("right")) {
            n += 1;
            $(".photo_slider").addClass("right");
            setTimeout(function () {
                $(".photo_slider .container-images img.active").addClass("to_right");
            }, 50);
        }

        if (n > nbImg) n = 1;
        if (n < 1) n = nbImg;

        setTimeout(function () {
            $(".photo_slider .container-images img").removeClass("active");
            $(".photo_slider .container-images img:nth-child(" + n + ")").addClass(
                "active"
            );

            setTimeout(function () {
                $(".photo_slider .container-images img").removeClass("to_left");
                $(".photo_slider .container-images img").removeClass("to_right");
            }, 500);
        }, 50);
    });

    function imageActive() {
        let n = 1;
        $(".photo_slider .container-images img").each(function (index) {
            if ($(this).hasClass("active")) {
                n += index;
            }
        });
        return n;
    }
});
