<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'Admin\IndexController@show']);

// Работа с маршрутам 6-8 урок

//Route::get('/article/{id}', ['as' => 'article',function ($id) {
//    echo $id;
//}]);

//Route::get('/page/{cat}/{id}', function ($var1){
//
//    echo '<pre>';
//    echo $var1;
//    //print_r($_ENV);
//    //echo config('app.locale');
////    echo Config::set('app.locale', 'ru');
////    echo Config::get('app.locale');
//    //echo env('APP_ENV');
//
//
//    echo '</pre>';
//})->where(['id' => '[0-9]+', 'cat' => '[A-Za-z]+']);

//Route::group(['prefix' => 'admin/{id}'], function (){
//
//   Route::get('page/create/{var}',function ($var){
//
//       $route = Route::current();
//
//     //  echo $route->getName();
////       echo $route->getParameter('var',25);
//       print_r($route->parameters());
//
//      // return redirect()->route('article',array('id'=>25));
//   })->name('createpage');
//
//    Route::get('page/edit',function (){
//        echo 'page/edit';
//    });

//});


Route::get('/about',['uses' => 'Admin\AboutController@show', 'as' => 'about']);
//
Route::get('/articles',['uses' =>'admin\Core@getArticles','as' => 'articles']);
Route::get('/article/{id}',['middleware'=>'mymiddle:home',  'uses' => 'admin\Core@getArticle','as' => 'article']);

Route::match(['get','post'],'/contact/{name?}', ['uses' => 'admin\ContactController@show', 'as' => 'contact'] );

//list pages
//Route::get('pages/add', 'admin\CoreResourse@add');
//Route::resource('/pages', 'admin\CoreResourse',['except' => ['index','show']]);

//Route::controller('/pages','PagesController');

Route::group(['middleware' => ['web']],function(){


});