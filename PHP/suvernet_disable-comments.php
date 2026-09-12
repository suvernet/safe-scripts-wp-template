<?php
/**
 * Отключаем комментарии на всём сайте.
 * Вставьте этот код в functions.php вашей темы или в плагин Code Snippets.
 */

// Отключаем поддержку комментариев у типов записей
add_filter('comment_forms_default_fields', '__return_empty_array');

// Убираем метабокс комментариев в админке
function suvernet_remove_comments_meta_box() {
    remove_meta_box('commentstatusdiv', 'post', 'normal');
    remove_meta_box('commentstatusdiv', 'page', 'normal');
}
add_action('admin_menu', 'suvernet_remove_comments_meta_box');

// Запрещаем отправку комментариев через REST API
add_filter('rest_insert_comment_pre', function (\$commentdata) {
    return new WP_Error('rest_comments_disabled', __('Комментарии отключены на этом сайте.', 'safe-scripts'), ['status' => 403]);
});

