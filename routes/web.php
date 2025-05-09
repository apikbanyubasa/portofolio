<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resumeed', function () {
    return view('resumeed');
});

Route::get('/resumeex', function () {
    return view('resumeex');
});

Route::get('/resumeac', function () {
    return view('resumeac');
});

Route::get('/resumepu', function () {
    return view('resumepu');
});

Route::get('/projects', function () {
    return view('projects');
});
