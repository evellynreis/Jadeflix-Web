<?php

require_once 'vendor/autoload.php';
require_once __DIR__ . '/src/Controller/LoginController.php';

use JadeFlix\Site\Core\Router;

$rota = $_GET['router'] ?? '';
$oRouter = new Router();