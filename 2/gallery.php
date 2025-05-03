<?php
// <!-- Этот файл будет загружать изображения и использовать другой шаблон для отображения галереи: -->
// Получаем список изображений из папки:
$images = array_filter(scandir('images'), function($file) {
    return preg_match('/\.(jpg|jpeg|png|gif)$/i', $file);
});

// Динамически загружаем шаблон галереи
include __DIR__ . '/views/gallery.php';