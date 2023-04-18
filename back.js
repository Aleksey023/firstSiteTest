$(".back").click(function () {
    $("body,html").animate({scrollTop: 0}, 800); // 800 - Скорость анимации
});

$(window).scroll(function () { // Отслеживаем начало прокрутки
    let scrolled = $(window).scrollTop(); // Вычисляем сколько было прокручено.

    if (scrolled > 350) { // Если высота прокрутки больше 350 - показываем кнопку
        $(".back").addClass("active");
    } else {
        $(".back").removeClass("active");
    }
});