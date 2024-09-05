<?php
// Configuración de rutas: Define la constante CONTROLLERS_DIR con la ruta a la carpeta de controladores.
// __DIR__ es una constante mágica que representa el directorio actual del archivo.
define('CONTROLLERS_DIR', __DIR__ . '/Controllers/');

// Define la constante VIEWS_DIR con la ruta a la carpeta de vistas.
define('VIEWS_DIR', __DIR__ . '/Views/');

// Obtener parámetros de la URL
// $_GET['C'] busca el parámetro 'C' en la URL, que indica el nombre del controlador.
// Si 'C' no está definido en la URL, se asigna 'Landing' como valor predeterminado.
$controllerName = isset($_GET['C']) ? $_GET['C'] : 'Landing';

// $_GET['A'] busca el parámetro 'A' en la URL, que indica el método a ejecutar del controlador.
// Si 'A' no está definido en la URL, se asigna 'index' como valor predeterminado.
$actionName = isset($_GET['A']) ? $_GET['A'] : 'inicio';

// Construir el nombre completo del archivo del controlador
// Combina la constante CONTROLLERS_DIR con el nombre del controlador y agrega '.php'.
// Esto da como resultado una ruta completa al archivo del controlador.
$controllerFile = CONTROLLERS_DIR . $controllerName . '.php';

// Verificar si el archivo del controlador existe en la ruta especificada
if (file_exists($controllerFile)) {
    // Incluir el archivo del controlador si existe.
    // Esto permite usar la clase y métodos definidos en el archivo.
    require_once $controllerFile;
    
    // Crear una instancia del controlador
    // Asigna el nombre de la clase del controlador.
    $controllerClass = $controllerName;
    
    // Verificar si la clase del controlador existe
    if (class_exists($controllerClass)) {
        // Crear una nueva instancia del controlador usando el nombre de la clase.
        $controller = new $controllerClass();
        
        // Verificar si el método existe en el controlador
        if (method_exists($controller, $actionName)) {
            // Llamar al método del controlador especificado en la URL.
            $controller->$actionName();
        } else {
            // Si el método no existe en el controlador, mostrar la vista por defecto.
            showDefaultView();
        }
    } else {
        // Si la clase del controlador no existe, mostrar la vista por defecto.
        showDefaultView();
    }
} else {
    // Si el archivo del controlador no existe, mostrar la vista por defecto.
    showDefaultView();
}

// Función para mostrar la vista por defecto
function showDefaultView() {
    // Incluir la vista por defecto.
//    Incluye el archivo 'landing.php' de la carpeta de vistas.
    include VIEWS_DIR . 'landing.php';
}
