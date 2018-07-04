<?php

namespace App\Http\Controllers\admin;

//use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;


class AboutController extends Controller
{
    //
    public function show(){

//        return 'hello';

        if(view()->exists('default.about')){

            //$articles = DB::select("SELECT * from `articles` WHERE id = :id",['id' => 10]);
            DB::insert("INSERT INTO `articles` (`name`,`text`,`img`) VALUES (?, ?, ?)",['test 1','TEXT','pic8.jpg']);

            //$result = DB::connection()->getPdo()->lastInsertId();
            //$result = DB::update("UPDATE `articles` SET `name`  = ? WHERE `id` = ?",['test3',10]);
            //$result = DB::delete('DELETE from `articles` WHERE `id` = ?', [8]);

            //DB::statement('DROP table `articles`');
            $articles = DB::select("SELECT * from `articles`");
            //dump($result);
            dump($articles);

            //$view = view('default.about')->withTitle('Hello world')->render();

//            return (new Response($view))->header('Content-Type','newType');
//
//            return response($view);

//            return response()->json(['name' => 'Hello','name1' => 'Hello1']);
//            return response()->view('default.about',['title' => 'Hello wordl']);
//            return response()->download('robots.txt', 'mytext.txt');
            return view('default.about')->withTitle('Hello world');

//            return redirect('/');
//            return redirect('/articles')->with('param', 'Hello');
//            return redirect()->action('admin\ContactController@show');
//            return new RedirectResponse('/articles');

            //return response()->myRes('hello world');
        }

        abort(404);
    }
}
