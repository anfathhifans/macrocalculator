<?php
if(!session_id()) session_start();
error_reporting(E_ALL & ~(E_NOTICE | E_WARNING | E_STRICT));

define('DS', DIRECTORY_SEPARATOR);
define('REQUIRED_PHP_VERSION', '7.3.0');

define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'database');
define('CHARSET', 'utf8mb4');

try {
    if(!version_compare(PHP_VERSION, REQUIRED_PHP_VERSION, '>=')) {
        throw new Exception('PHP Version is not compiled : PHP ≥ ' . PHP_VERSION);
    }
} catch (Exception $e) {
    die('Server Error : ' . $e->getMessage() . "\n");    
}

require __DIR__ . DS . 'class'. DS . 'app.php';

use App\App;

$app = new App([
	'root_dir' => 'mealplan/',
	'root_path' => __DIR__ . DS,
]);
$app->run();