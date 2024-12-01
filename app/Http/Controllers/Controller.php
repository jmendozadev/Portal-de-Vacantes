<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function __invoke()
    {
        return view('home');
    }
}
