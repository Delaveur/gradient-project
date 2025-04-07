<?php
$base_path = $_SERVER['DOCUMENT_ROOT'].'/images';
$requested_path = isset($_GET['path']) ? $_GET['path'] : '';

// Проверка безопасности
if (preg_match('/\.\./', $requested_path)) {
    die(json_encode(['error' => 'Invalid path']));
}

$full_path = $base_path . '/' . $requested_path;
$images = [];

if (is_dir($full_path)) {
    $files = scandir($full_path);
    foreach ($files as $file) {
        if (preg_match('/\.(jpg|jpeg|png|webp)$/i', $file)) {
            $images[] = '/images/' . $requested_path . '/' . $file;
        }
    }
}

header('Content-Type: application/json');
echo json_encode(['images' => $images]);
?>