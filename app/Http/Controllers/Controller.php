<?php

namespace App\Http\Controllers;

class Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $res = \DB::connection('mysql')->select('select 1');
        \Log::Info("Test logging message", ['x' => 'y', 'res' => $res]);
        return "Hello, world!";
    }
}
