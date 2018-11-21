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

Route::get('/', function () {
//    return view('welcome');
    return 'Hello Slgogo!';
});

//Route::post('/', function () {});
//Route::put('/', function () {});
//Route::delete('/', function () {});
//Route::any('/', function () {});
//Route::match(['get','post'], function () {});


Route::get('users/{userId}/comments/{commentId}',function(){
    return View::make('test.index');
})->where(['userId'=>'[0-9]+','commentId'=>'[A-Za-z]+'])->name('user.comments.show');

//Route::group(['middleware'=>'auth'],function(){
    Route::group(['middleware'=>'auth','prefix' => 'admin'],function(){
    
        Route::get('users/{id}/friends',function($id){
        return '这是用户id路由参数:'.$id;
    })->where('id','[0-9]+');

    Route::get('posts/{id}/{slug}',function($id,$slug){
        return '这是用户id路由参数:'.$id.'<br/>'.'第二个参数是：'.$slug;
    })->where(['id' => '[0-9]+' , 'slug' => '[A-Za-z]+' ]);
});

//Route::get('users/{id}/friends',function($id){
//    return '这是用户id路由参数:'.$id;
//})->where('id','[0-9]+');
//
//Route::get('posts/{id}/{slug}',function($id,$slug){
//    return '这是用户id路由参数:'.$id.'<br/>'.'第二个参数是：'.$slug;
//})->where(['id' => '[0-9]+' , 'slug' => '[A-Za-z]+' ]);

//Route::get('users/{id?}',function($id='668'){
//    return '这是用户id路由参数：'.$id;
//})->where('id','[0-9]+');


Route::get('users/{id}',function($id){
    return View::make('test.index');
})->name('members.show');

Route::get('about', function () {
//    return view('welcome');
    return 'This is about pages!';
});

Route::get('product', function () {
//    return view('welcome');
    return 'This is Product pages!';
});

Route::get('services', function () {
//    return view('welcome');
    return 'This is services pages!';
});

Route::get('/','TasksController@index');

Route::get('tasks/create','TasksController@create');
Route::post('tasks','TasksController@store');

