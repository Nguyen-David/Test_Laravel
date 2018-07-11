<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Article;

class Core extends Controller
{
    protected static $articles;

    public function __construct()
    {
//        $this->middleware('mymiddle');
    }

    public static function addArticles($array){
        return self::$articles[] = $array;
    }

    //list materials
    public function getArticles(Request $request){

//           $articles =  DB::table('articles')->get();
//        $articles =  DB::table('articles')->first();
//        $articles =  DB::table('articles')->value('name');

//        DB::table('articles')->orderBy('id')->chunk(2,function ($articles){
//
//            foreach ($articles as $article){
//                Core::addArticles($article);
//            }
//
//        });
//
//        dump(self::$articles);

//        $articles =  DB::table('articles')->pluck('name');
//        $articles =  DB::table('articles')->count();
        //$articles =  DB::table('articles')->max('id');

//        $articles =  DB::table('articles')->select('name','id','text')->get();
//        $articles =  DB::table('articles')->distinct()->select('name')->get();

       // $query =  DB::table('articles')->select('name');
        ////

        ////
  //      $articles = $query->addSelect('text AS fulltext')->get();

//        $articles =  DB::table('articles')->select('name','text AS fulltext')
//            ->where('id','>',15)
//            ->where('name','like','test%','or')
//            ->orWhere('id','<',2)
//            ->get();;

        /*$articles = DB::table('articles')->whereNotBetween('id',[1,5])->get();*/
       // $articles = DB::table('articles')->whereNotIn('id',[11,12,13])->get();

        //$articles = DB::table('articles')->groupBy('name')->get();

        //limit
        //$articles = DB::table('articles')->take(4)->skip(2)->get();

//        DB::table('articles')->insert( [
//            ['name' => 'Test2', 'text' => 'hello'],
//            ['name' => 'Test3', 'text' => 'hello world'],
//            ['name' => 'Test2', 'text' => 'hello'],
//            ['name' => 'Test3', 'text' => 'hello world'],
//            ['name' => 'Test2', 'text' => 'hello'],
//            ['name' => 'Test3', 'text' => 'hello world']
//        ]);

        //$result = DB::table('articles')->insertGetId(['name' => 'Test2', 'text' => 'hello']);

        //dump($result);
        //$result = DB::table('articles')->where('id',22)->update(['name'=>'Hello world1']);


        /*		LEFT JOIN 'articles' ON user.id = articles.id
		$users = DB::table('users')
            ->leftJoin('articles', 'user.id', '=', 'articles.id')
            ->select()
            ->get();
		*/

//        $result = DB::table('articles')->where('id',22)->delete();
//        dump($result);
//        $articles = DB::table('articles')->get();
//        dump($articles);

        // MODELS

//        $articles = Article::all();
//        $articles = Article::where('id','>',20)->orderBy('name')->take(2)->get();

//        Article::chunk(2,function ($articles){
//
//        });

//        $article = Article::find(16);

//        $article = Article::where('id',16)->first();

//        $articles = Article::find([12,23,18]);


//        $article = Article::findOrFail(1);

//        $article = new Article;
//
//        $article->name = 'New Article';
//        $article->text = 'New Text';

//        $article = Article::find(37);
//
//        $article->name = 'New Name 2';
//        $article->text = 'New Text 2';
//
//        $article->save();
//


//        foreach ($articles as $article){
//            echo $article->name."<br>";
//        }

//        Article::create(
//            [
//                'name' => 'Hello world',
//                'text' => 'Some text',
//            ]
//        );

//        $article = Article::firstOrCreate(
//            [
//                'name' => 'Hello world1',
//                'text' => 'Some text'
//            ]
//        );

//        $article = Article::firstOrNew([
//            'name' => 'Hello world2',
//           'text' => 'Some text'
//        ]);
//
//        $article->save();


//       $article =  Article::find(35);
//
//       $article->delete();

//        Article::destroy([33,32]);

//        Article::where('id','>','3')->delete();


//        $article =  Article::find(37);
//
//        $article->delete();

//        $articles =  Article::onlyTrashed()->restore();

//        foreach ($articles as $article){
//            if($article->trashed()){
//                echo $article->id.' Удалена<br/>';
//                $article->restore();
//            }
//            else{
//                echo $article->id.' Не удалена<br/>';
//            }
//        }

//        $articles = Article::all();

//        $article =  Article::find(37);
//        $article->forceDelete();

//        dump($articles);
//        dump($article);


        return;
    }
    //one article
    public function getArticle($id){

        echo 'Ответ -'.$id;
    }
}
