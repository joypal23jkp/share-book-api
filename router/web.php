<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/api/documents', function (){
    return view('api');
})->name('api.documentation');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home/{local}', function ($local){
    if (! in_array($local, ['en', 'fr'])) {
        abort(400);
    }

    \Illuminate\Support\Facades\App::setLocale($local);
});


Route::any( '/{any?}', function () {
    return view('admin/home');
});


