<?php
require __DIR__ . '/vendor/autoload.php';

// Your App
$app = new Bullet\App();
$app->path('/', function($request) {
    return "Hello World!";
});

// Run the app! (takes $method, $url or Bullet\Request object)
echo $app->run(new Bullet\Request());