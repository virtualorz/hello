<?php

namespace Virtualorz\Hello;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class HelloController extends Controller
{
    //
    public function index()
    {
        $message = 'Hi, this is my first package';
        return view('Hello::welcome', compact('message'));
    }
}
