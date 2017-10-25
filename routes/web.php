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

Route::get('/', ['as'=>'home',function () {
    return view('welcome');
}]);

Route::get('/article/{ib}', ['as'=>'article',function ($ib) {
   echo $ib;
}]);

Route::get('/page/{id?}/{cat}',function ($id=50,$cat){
    echo '<pre>';
    echo $id.'|'.$cat;
   // print_r($_ENV);
   // echo config('app.locale');
  //  echo Config::set('app.locale','ru');
  //  echo Config::get('app.locale');
    echo '</pre>';
  //  echo env('APP_ENV');
//;
})
   // ->where(['id'=>'[0-9]+','cat'=>'[A-Za-z]+'])
;

Route::group(['prefix'=>'admin'],function () {
    Route::get('page/create', function () {
     $route=Route::current();
        echo $route->getName();
        // return redirect()-> route('article',array('ib'=>24));
    })->name('createpage');
    Route::get('page/edit', function () {
        echo 'page/edit';

    });
});   /*Route::any('/comments',function(){
    print_r($_POST);
    echo 'dfgfd';
});*/