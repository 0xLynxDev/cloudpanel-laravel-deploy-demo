<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => response('CloudPanel Git deployment demo - release 2', 200)
    ->header('Content-Type', 'text/plain; charset=UTF-8'));
