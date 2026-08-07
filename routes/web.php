<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $student = [
        'name' => 'Carl Matthew Castro',
        'number' => '09813827290',
        'course' => 'BS Information Technology',
        'section' => 'D',
        'subject' => 'ITEP 206',
    ];

    return view('welcome', ['student' => $student]);
});
