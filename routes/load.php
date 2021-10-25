<?php

use app\models\User;
use app\routes\Route;
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'userClass'=> User::class,
    'db'=>[
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];
$app = new \app\core\Application($config);
$app->db->applyMigrationsTable();
$route = new Route($config);

include_once "../routes/web.php";
$route->runs();