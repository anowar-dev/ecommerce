<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontContrller extends Controller
{
    public function home()
    {
        return view('home');
    }
}
