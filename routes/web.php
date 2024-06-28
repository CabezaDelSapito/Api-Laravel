<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::controller(HelloWorldController::class)->group(function (){
    route::get('/','get');
});