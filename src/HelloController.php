<?php

namespace Virtualorz\Hello;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class Hello
{
    //
    public $result = '';
    public function index()
    {
        $message = 'Hi, this is my first package';
        return view('Hello::welcome', compact('message'));
    }

    public function __construct($a=””, $b=””)
    {
        $this->result = $a + $b;
    }
    public function result()
    {
        return $this->result;
    }
}
