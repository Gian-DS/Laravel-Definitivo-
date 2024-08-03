<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');//
    return "Bienvenidos a laravel";
});

Route::get('indice', function () {
    //return view('welcome');//
    return "<h1>Bienvenidos a los cursos principales</h1>";
});

Route::get('saludo/nuevo', function () {
    //return view('welcome');//
    return "<h1>Este es el nuevo curso de PHP</h1>";
});

Route::get('indice/{indice}/{primera}/{segunda}', function ($indice,$primera,$segunda) {
    //return view('welcome');//
    return "<h1>Bienvenido al indice principal: $indice, $primera, $segunda<h1>" ;
});

Route::get('indice/{indice}/{id?}', function ($indice,$id=null) {
    //return view('welcome');//
    return "<h1>Bienvenido al curso principal: $indice, con su id: $id <h1>" ;
});

//Inyec

/* Route::get('indice/{indice}/{id?}', function ($indice,$id=null) {
    if ($id){
        return "Bienvenidos al curso principal: $indice, con id: $id";
    }else{
        return "Bienvenidos al curso principal $indice";
    }
}); */