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
            'title' => 'my_title'
        ]);
    }
}
