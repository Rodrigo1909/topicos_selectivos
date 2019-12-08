<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['records' => \App\Niko::all()]);
})->name('root');

Route::get('/nuevo', function () {
    return view('crear');
})->name('nuevo');

Route::get('/editar/{id}', function ($id) {
    return view('editar', [ 'record' => \App\Niko::find($id) ]);
})->name('editar');

Route::get('/pdf', function () {
    $pdf = \PDF::loadView('welcome', [
        'records' => \App\Niko::all(),
        'pdf' => true,
    ]);
    return $pdf->download('nikos.pdf');
})->name('pdf');

Route::post('/crear', 'Nikolo@store');
Route::post('/actualizar/{id}', 'Nikolo@actualizar');
Route::get('/eliminar/{id}', 'Nikolo@eliminar');
