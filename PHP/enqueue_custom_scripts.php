<?php
/**
 * Подключаем кастомные скрипты и стили.
 * Вставьте этот код в functions.php вашей темы или в плагин Code Snippets.
 */

function suvernet_enqueue_custom_assets() {
    // Подключаем свой CSS
    wp_enqueue_style(
        'suvernet_custom_styles',
        get_template_directory_uri() . '/css/quick_fixes.css',
        array(),
        filemtime(get_template_directory() . '/css/quick_fixes.css') // версия по дате изменения
    );

    // Подключаем свой JS
    wp_enqueue_script(
        'suvernet_custom_scripts',
        get_template_directory_uri() . '/js/frontend_utils.js',
        array('jquery'), // зависимости
        filemtime(get_template_directory() . '/js/frontend_utils.js'),
        true // ставить в футер
    );
}
add_action('wp_enqueue_scripts', 'suvernet_enqueue_custom_assets');
