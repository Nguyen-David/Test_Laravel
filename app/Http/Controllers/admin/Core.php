<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Core extends Controller
{

    public function __construct()
    {
//        $this->middleware('mymiddle');
    }

    //list materials
    public function getArticles(){

    }
    //one article
    public function getArticle($id){

        echo 'Ответ -'.$id;
    }
}
