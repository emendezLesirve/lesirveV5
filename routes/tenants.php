<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware(['web'])
    ->namespace('App\Http\Controllers')
    ->as('tenant.')
    ->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
       // Route::resource('/adm', 'AdmController@index');
        Route::resource('/adm/articulos', 'ArticuloController');
      /*  Route::get('/adm/articulos/create', 'ArticuloController@create');
        Route::post('/adm/articulos', 'ArticuloController@store');
        Route::get('/adm/articulos/{id}', 'ArticuloController@edit');
        //Route::update('')*/
        Route::get('/products', function () {
           dd(\App\Models\Tenant\Product::all());
        });
    });
