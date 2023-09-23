<?php
// Obtener la ruta solicitada
$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$url = rtrim($url, '/'); // Eliminar la barra diagonal al final si existe

// Verificar si la ruta raíz tiene parámetros
if (strpos($url, '?') !== false) {
    // Obtener la parte de la ruta antes del signo de interrogación
    $url = strtok($url, '?');
}

// Rutas disponibles y sus correspondientes archivos
$rutas = [
    '' => 'index',
    '/' => 'index',
    '/nosotros' => 'nosotros',
    '/donaciones' => 'donaciones',
    '/actividades-sociales' => 'actividades-sociales',
    '/terapias' => 'terapias',
    '/landing' => 'landing'
];

// Verificar si la ruta existe en el array de rutas
if (array_key_exists($url, $rutas)) {
    // Construir la ruta del archivo
    $rutaArchivo = 'pages/' . $rutas[$url] . '.php';

    // Verificar si el archivo existe
    if (file_exists($rutaArchivo)) {
        // Incluir el archivo correspondiente
        include $rutaArchivo;
        exit(); // Salir del script después de incluir el archivo
    }
}

// Verificar si se está accediendo a una ruta con parámetros
if (preg_match('/^\/([\w-]+)(\?.*)?$/', $url, $matches)) {
    // Obtener el nombre de la página
    $nombrePagina = $matches[1];

    // Construir la ruta del archivo de la página
    $rutaArchivo = 'pages/' . $nombrePagina . '.php';

    // Verificar si el archivo existe
    if (file_exists($rutaArchivo)) {
        // Incluir el archivo de la página
        include $rutaArchivo;
        exit(); // Salir del script después de incluir el archivo
    }
}

// Ruta no encontrada, incluir controlador de página no encontrada
include 'pages/notfound.php';