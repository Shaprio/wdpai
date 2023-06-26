<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('index', 'DefaultController');
Router::get('profil', 'DefaultController');
Router::get('game', 'DefaultController');
Router::get('rules', 'DefaultController');
Router::get('addcard', 'DefaultController');
Router::get('mycards', 'DefaultController');
Router::post('login', 'SecurityController');

Router::run($path);