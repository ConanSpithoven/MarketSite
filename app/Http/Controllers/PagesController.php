<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'Go to the market',
            'Go to the auction',
            'Go to your page'
        ];
    
        return view('welcome', [
            'tasks' => $tasks
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
