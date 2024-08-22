<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Aqui se mostraran todos los posts"; 
    }
    public function create(){
        return "Se mostrara un formulario para crear";
    }
    public function show($post){
        return "Se mostrara el post {$post}";
    }
}
