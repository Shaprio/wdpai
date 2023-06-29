<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('index', 'DefaultController');
Router::get('profil', 'DefaultController');
Router::get('game', 'ProjectController');
Router::get('rules', 'DefaultController');
Router::get('addcard', 'DefaultController');
Router::get('projects', 'ProjectController');
Router::post('login', 'SecurityController');
Router::post('addProject', 'ProjectController');
Router::post('register', 'SecurityController');
Router::post('search', 'ProjectController');


Router::run($path);