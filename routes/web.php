<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
Route::get(
    '/',
    function () {
        // return 'test'
        return Inertia::render(
            'Dashboard/Index',
            [
                'title' => 'Homepage',
            ]
        );
    }
)->name( 'homepage' );