<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */



 //se puede usar directamente view que recibe peticiones get y het

 //app => welcome
 Route::view('/','welcome')-> name('home');

 //app/contacto => contact
 Route::view('/contact','contact') -> name('contact');

 //app/blog => blog
 Route::get('/blog', [PostController::class, 'index'])->name('posts.index');//muestra lista
 Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');//crea
 Route::post('/blog', [PostController::class, 'store'])->name('posts.store');//almacena
 Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');//muestra contenido

 //app/acercaDeMi => about
 Route::view('/about','about')-> name('about');
