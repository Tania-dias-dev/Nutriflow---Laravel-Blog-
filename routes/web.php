<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\posts\PostsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'about';
});

//get, post, update, put;

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/user/{id}', function($id){
    return "the id is: " . $id;
});

Route::post('/create-post', function(){
    return "post created";
});

Route::any('/create-post', function(){ //usamos o any para qualquer tipo, apenas para teste
    return "post created";
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts/index', [App\Http\Controllers\posts\PostsController::class, 'index'])->name('posts.index');

Route::get('/posts/singlepost/1', [App\Http\Controllers\posts\PostsController::class, 'singlepost'])->name('posts.singlepost');
