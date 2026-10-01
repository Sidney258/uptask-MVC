<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\DashboadController;
use Controllers\LoginController;
use Controllers\TareaController;
use MVC\Router;

$router = new Router();
// * login
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// * criacao de contas
$router->get('/crear', [LoginController::class, 'crear']);
$router->post('/crear', [LoginController::class, 'crear']);

// * formulario de esqueci minha password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);

// * redefinir a nova password
$router->get('/reestablecer', [LoginController::class, 'reestablecer']);
$router->post('/reestablecer', [LoginController::class, 'reestablecer']);

// * confirmacao de conta
$router->get('/mensaje', [LoginController::class, 'mensaje']);
$router->get('/confirmar', [LoginController::class, 'confirmar']);

// * Area Privada de Dashboard
$router->get('/dashboard', [DashboadController::class, 'index']);
$router->get('/crear-proyecto', [DashboadController::class, 'crear_proyecto']);
$router->post('/crear-proyecto', [DashboadController::class, 'crear_proyecto']);
$router->get('/perfil', [DashboadController::class, 'perfil']);
$router->post('/perfil', [DashboadController::class, 'perfil']);
$router->get('/proyecto', [DashboadController::class, 'proyecto']);
$router->get('/cambiar-password', [DashboadController::class, 'cambiar_password']);
$router->post('/cambiar-password', [DashboadController::class, 'cambiar_password']);

// * Area API
$router->get('/api/tareas', [TareaController::class, 'index']);
$router->post('/api/tarea', [TareaController::class, 'crear']);
$router->post('/api/tarea/actualizar', [TareaController::class, 'actualizar']);
$router->post('/api/tarea/eliminar', [TareaController::class, 'eliminar']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
