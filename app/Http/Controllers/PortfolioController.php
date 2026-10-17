<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $student = [
            'first_name' => 'Carl Matthew',
            'last_name' => 'T. Castro',
            'full_name' => 'Carl Matthew T. Castro',
            'number' => '0123-0616',
            'course' => 'Bachelor of Science in Information Technology',
            'section' => '3D',
            'subject' => 'ITST 302 - Client-Server Technologies',
            'date' => now('Asia/Manila')->format('m/d/Y'),
        ];

        return view('welcome', compact('student'));
    }
}
