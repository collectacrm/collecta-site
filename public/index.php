<?php
use Symfony\Component\HttpFoundation\Request;
require_once('../vendor/autoload.php');
require_once("../src/compat.php");


$config = ($base = dirname(__DIR__)."/")."app/config/config_".($env = $_SERVER["ENV"] ?: "production").".php";
$app = new Wildfire\Application($config);
$admin = new Wildfire\Admin($config);
$media = new Wildfire\Media($config);


$map = [
    "/admin" => $admin,
    "/m"     => $media,
    "/build" => $media
];

$app = (new Stack\Builder())
        ->push('Stack\UrlMap', $map)
        ->resolve($app);


$request = Request::createFromGlobals();
$response = $app->handle($request);


$response->send();
$app->terminate($request, $response);

