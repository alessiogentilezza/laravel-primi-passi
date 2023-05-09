<?php

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

Route::get('/', function () {

    $saluto= 'hello word';
    $welcome_message = "Benvenuti in Laravel";

    //return view('welcome', compact('class_number', 'welcome_message'));

    $data = [
        'saluto' => $saluto,
    ];

    return view('home', $data);
});
