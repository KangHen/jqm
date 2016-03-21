<?php
/* Define HOMEBASE For App Location */
define("HOMEBASE","http://localhost/uts/");
/* Call Autoload Composer */
require "vendor/autoload.php";
require "pages/SoMiddleware.php";
/* Call Class Slim Framework */
$app=new \Slim\App();

/* Make Router Here */
$app->get("/",function($request, $response, $args){ require "pages/dashboard.php"; })->add(new SoMiddleware());
$app->get("/cat",function($request, $response, $args){ require "pages/cat.php"; })->add(new SoMiddleware());

/* Run App */
$app->run();
