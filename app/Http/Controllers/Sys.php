<?php

namespace App\Http\Controllers;

use App\Http\Page\News as PageData;

class Sys extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function welcome(){
        return view("sys/welcome");
    }
}
