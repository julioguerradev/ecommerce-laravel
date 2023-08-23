<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('user/{user:email}', function(User $user) {
    // dd($user);
    return $user;
});

Route::prefix('usuarios')->group(function() {
    Route::get('', function(){
        return 'usuarios';
    })->name('usuarios');

    Route::get('/{id}', function($id){
        return 'mostrar detalhes ' . $id;
    })->name('usuarios.show');

    Route::get('/{id}/tags', function(){
        return 'Tags do usuario';
    })->name('usuarios.tags');
});


Route::get('/a-empresa/{string?}', function ($string = null) {
    return $string;
    // return view('welcome');
})->name('a-empresa');

Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
    return $paramA . ' - ' . $paramB;
    // return view('welcome');
});
