<?php
// Arquivo responsável por iniciar a aplicação
define('APP_ROOT', realpath(__DIR__ . '/..'));

require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/Core/Autoloader.php';
require_once __DIR__ . '/Routes/TicketsRouter.php';

Autoloader::register();

$config = require __DIR__ . '/../config/app.php';
$db = Database::getConnection();
Logger::setConnection($db);

if ($config['app']['debug']) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
} else {
  ini_set('display_errors', 0);
  ini_set('display_startup_errors', 0);
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
}
