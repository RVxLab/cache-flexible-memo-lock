<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Cache::memo('file')->flexible('hello', [2, 20], fn () => 'Hello, world!');
});
