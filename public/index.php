<?php
use Symfony\Component\HttpFoundation\Request;

error_reporting(247);
$base = dirname(__DIR__);
define("SESSION_DIR", $base."/tmp/session/");

require_once('../vendor/autoload.php');
$conf = $base."/config/";


$env = $_SERVER["ENV"] ?: "production";
$app = new Wildfire\Application();
$app->setConfig($conf."$env.php");
$admin = new Wildfire\Admin();
$admin->setConfig($conf."$env.php");
$media = new Wildfire\Media();
$media->setConfig($conf."$env.php");

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

