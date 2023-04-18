$(function () {
    $(".contacts__form").submit(function () {
        const form = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: form.serialize(),
            success: (function () {
                $(".js-overlay-thank-you").fadeIn();
                form.trigger("reset");
            })
        });
        return false;
    });
});

// Закрыть попап «спасибо»
$(".js-close-thank-you").click(function () { // по клику на крестик
    $(".js-overlay-thank-you").fadeOut();
});

$(document).mouseup(function (e) { // по клику вне попапа
    const popup = $(".js-thank-you");
    if (e.target !== popup[0] && popup.has(e.target).length === 0) {
        $(".js-overlay-thank-you").fadeOut();
    }
});
