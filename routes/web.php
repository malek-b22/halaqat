<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    return 'قائمة الطلاب';
});

Route::get('/about', function () {
    return 'عن نظام الحلقات';
});
