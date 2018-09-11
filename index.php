<?php

session_start();
require_once "config/include.php";
require_once "helpers/Bootstrap.php";
require_once "helpers/Autoloader.php";

// Start app
$bootstrap = new Bootstrap();


//Autoload les controllers
Autoloader::register();

// Ajout des routes
require_once "config/routes.php";