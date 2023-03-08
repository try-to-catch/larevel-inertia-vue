<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class IndexController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Home', [
            'title' => 'Home'
        ]);
    }
    public function about(): Response
    {
        return Inertia::render('About', [
            'title' => 'About'
        ]);
    }
}
