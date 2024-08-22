<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    
});

Route::get('/posts', function(){
return "Aqui se mostraran todos los posts";
});

// Capturar variable por Ruta
/*Route::get('/posts/{post}', function($post){
    return "Aqui se mostrara el post {$post}";
});*/

//Capturar dos variables en ruta
Route::get('/posts/create', function(){
    return "Aqui se mostrara un formulario para crear nuestros articulos";
});



/*
Route::get('/posts/post-2', function(){
    return "Aqui se mostrara el post 2";
});

Route::get('/posts/post-3', function(){
    return "Aqui se mostrara el post 3";
});*/

//Get
//Post
//Put Se utilizan para actualizar algun registro
//Delete Elimina registros 
//Patch Se utilizan para actualizar algun registro