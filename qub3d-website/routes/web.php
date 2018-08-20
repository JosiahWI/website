<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return view('home');
});

$router->get('/legal', function () use ($router) {
    return view('legal');
});

$router->get('/legal/privacy', function () use ($router) {
    return view('privacypolicy');
});

$router->get('/legal/termsofdevelopment', function () use ($router) {
    return view('termsofdev');
});

$router->get('/legal/termsofuse', function () use ($router) {
    return view('termsofuse');
});

