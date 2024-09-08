<?php
// Configuración de rutas: Define la constante CONTROLLERS_DIR con la ruta a la carpeta de controladores.
// __DIR__ es una constante mágica que representa el directorio actual del archivo.
define('CONTROLLERS_DIR', __DIR__ . '/Controllers/');

// Define la constante VIEWS_DIR con la ruta a la carpeta de vistas.
define('VIEWS_DIR', __DIR__ . '/Views/');

// Ruta por defecto si el controlador o método no se encuentran
define('DEFAULT_CONTROLLER', 'Landing');
define('DEFAULT_METHOD', 'inicio');

// Obtener parámetros de la URL
// $_GET['C'] busca el parámetro 'C' en la URL, que indica el nombre del controlador.
// Si 'C' no está definido en la URL, se asigna DEFAULT_CONTROLLER como valor predeterminado.
$controllerName = isset($_GET['C']) ? $_GET['C'] : DEFAULT_CONTROLLER;

// $_GET['A'] busca el parámetro 'A' en la URL, que indica el método a ejecutar del controlador.
// Si 'A' no está definido en la URL, se asigna DEFAULT_METHOD como valor predeterminado.
$actionName = isset($_GET['A']) ? $_GET['A'] : DEFAULT_METHOD;

// Construir el nombre completo del archivo del controlador
$controllerFile = CONTROLLERS_DIR . $controllerName . '.php';

// Verificar si el archivo del controlador existe en la ruta especificada
if (file_exists($controllerFile)) {
    // Incluir el archivo del controlador si existe.
    require_once $controllerFile;
    
    // Asignar el nombre de la clase del controlador.
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
            // Redireccionar a una página de error si el método no existe en el controlador.
            header('Location: /ruta/error_metodo_no_encontrado');
            exit();
        }
    } else {
        // Redireccionar a una página de error si la clase del controlador no existe.
        header('Location: /ruta/error_controlador_no_encontrado');
        exit();
    }
} else {
    // Redireccionar a una página de error si el archivo del controlador no existe.
    header('Location: /ruta/error_archivo_controlador_no_encontrado');
    exit();
}

// No se llega a esta parte del código debido a las redirecciones anteriores,
// pero puedes mantener esta función para futuros usos o como fallback.
function showDefaultView() {
    // Incluir la vista por defecto.
    include VIEWS_DIR . 'landing.php';
}
