/**
 * Утилиты для фронтенда.
 * Вставьте этот код в свой JS‑файл темы или через плагин для вставки скриптов.
 */

(function(\$) {
    'use strict';

    // Пример: плавный скролл к якорям
    \$('a[href^="#"]').on('click', function(event) {
        var target = \$(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            \$('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 500);
        }
    });

    // Пример: добавляем класс при скролле
    \$(window).on('scroll', function() {
        if (\$(this).scrollTop() > 50) {
            \$('body').addClass('scrolled');
        } else {
            \$('body').removeClass('scrolled');
        }
    });

})(jQuery);

