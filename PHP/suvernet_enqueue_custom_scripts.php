<?php
/**
 * Подключаем кастомные скрипты и стили (имена файлов с _ вместо -).
 */

function suvernet_enqueue_custom_assets() {
    // Сначала твой базовый сброс
    wp_enqueue_style(
        'suvernet_reset',
        get_template_directory_uri() . '/css/suvernet_reset.css',
        array(),
        filemtime(get_template_directory() . '/css/suvernet_reset.css')
    );

    // Потом быстрые правки — зависят от reset
    wp_enqueue_style(
        'suvernet_custom_styles',
        get_template_directory_uri() . '/css/suvernet_quick_fixes.css',
        array('suvernet_reset'),
        filemtime(get_template_directory() . '/css/suvernet_quick_fixes.css')
    );

    // JS
    wp_enqueue_script(
        'suvernet_custom_scripts',
        get_template_directory_uri() . '/js/suvernet_frontend_utils.js',
        array('jquery'),
        filemtime(get_template_directory() . '/js/suvernet_frontend_utils.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'suvernet_enqueue_custom_assets');

