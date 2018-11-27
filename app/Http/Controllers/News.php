<?php

namespace App\Http\Controllers;

use App\Http\Page\News as PageData;
use App\Http\Models\News as NewsModel;

class News extends Controller
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

    //
    public function index(){
        echo 'test';
    }

    public function add(){
        $title = '添加文章';
        $newsPage = new PageData;
        return view("block/add",[
            'inputs'=> $newsPage->input,
            'title'=> $title
        ]);
    }

    public function lists(){
        return view('block/list');
    }

    public function edit(){

    }
}
