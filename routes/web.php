<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
});

Route::match(['get','post'],'/contact2',function(){
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view('cont');
});

Route::match(['get','post'],'/contact',function(){
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view('cont');
})->name('route_contact');

Route::get('article/{id}/edit',function($id){
    return $id;
});
Route::get('article/{id}/delete/{stug?}',function($id, $stug = null){
    return $id.' '.$stug;
});//->where(['id'=>'[0-9]+','stug'=>'[a-zA-Z0-9-]+']) в папке app/prividers/routeService  регулярные выражения

Route::prefix('/admin')->group(function(){

    Route::get('/articles',function(){
        return 'Articles Page';
    });
    Route::get('/article/create',function(){
        return 'Article Create Page';
    });
    Route::get('/article/edit/{id}',function($id){
        return 'Article Edit '.$id.' page';
    });

});

/*Route::get('comment/{id}/{slug}',function($id,$slug){
    return $slug.' '.$id;
});
Route::get('comment/{id}/edit',function($id){
    return $id.'edit';
})->name('commente'); // работает только первый URL*/

Route::fallback(function(){
    //return view('notfound');
    abort(404,'OOPS!');
});
