<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/request', function(Request $request) {
    // $request->all():  Se for get pega os dados da Query String
    // $request->input('teste'):  Pega o valor)
    // $request->has('keyword');
    // $request->path()
    // $request->url(): Pega a url
    // $request->fullUrl(): Url completa (inclusive a query string)
    // $request->header()
    // $request->whenHas('teste', function($input) {dd('x', $input);});
    // $request->whenFilled('teste', function($input) {dd('x', $input);});
    // $request->ip()
    $r = $request->query();

    dd($r);
    return 'x';
});

Route::get('user/{user}', [UserController::class, 'show']);

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
