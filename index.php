<?php
require 'Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get(
    '/',
    function () {
       require_once("view/index.php");
    }
);

$app->run();
