<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home()
    {
        return 'Hello WOrld !';
    }

    public function index() {
        return 'This is my Page !';
    }
}
