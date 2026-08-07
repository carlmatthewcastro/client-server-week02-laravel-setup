<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $student = [
        'name' => 'Carl Matthew T. Castro',
        'number' => '0123-0616',
        'course' => 'Bachelor of Science in Information Technology',
        'section' => '3D',
        'subject' => 'ITST 302 - Client-Server technologies',
        'date' => '08/07/2026',
    ];

    return view('welcome', ['student' => $student]);
});
