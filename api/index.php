<?php

 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Route;
 
 define('LARAVEL_START', microtime(true));
 
 require __DIR__.'/../vendor/autoload.php';
 
 $app = require_once __DIR__.'/../bootstrap/app.php';
 
 $app->bind('request', Request::class);
 
 $app->instance('request', Request::capture());
 
 Route::middleware('api')
     ->prefix('api')
     ->group(base_path('routes/api.php'));
 
 $app->run();
// require __DIR__ . '/../public/index.php';


// Load the Laravel application
// require __DIR__ . '/../vendor/autoload.php';
// $app = require_once __DIR__ . '/../bootstrap/app.php';
 
// Run the application
// $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
// $response = $kernel->handle(
//     $request = Illuminate\Http\Request::capture()
// );
// $response->send();
// $kernel->terminate($request, $response);