<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){

       // view('welcome');

    //  $data =  array('title' => 'Hello World', 'title2' => 'Hello world 3');
     //   return view('default.template',$data); // key =>value


//         $view = view('default.template'); // key =>value
//        $view->with('title', 'Hello world2');
//        $view->with('title2', 'Hello world3');
//        $view->with('title3', 'Hello world4');

        $array = array(

            'title'=>'Laravel Project',
            'data' =>[
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'four' => 'List 4',
                'five' => 'List 5'
            ],
            'dataI' =>['List 1','List 2','List 3','List 4','List 5'],

            'bvar' => true,
            'script' =>"<script>alert('hello')</script>"

        );

        if(view()->exists('default.index')){

            // Не работает
//            view()->name('default.template','myview');
//             return view()->of('myview')->withTitle('Hello world');

            //$view = view('default.template',['title' => 'Hello world'])->render();
            //echo view('default.template',['title' => 'Hello world'])->getPath();
            //echo $view;
            //return;

            //$path = config('view.paths');
            //return view()->file($path[0].'/default/layout.blade.php')->withTitle('Hello world');
            return view('default.index',$array);
        }

        abort(404);

    }
}
