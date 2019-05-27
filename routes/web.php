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
    return view('welcome');
});
Route::get('hello', function () {
    return 'hello world';
});
//多请求路由
Route::match(['get','post'],'hello1',function (){
    return "hello1";
});
Route::any('hello2',function (){
    return "hello2";
});

// 路由参数
/*Route::get('user/{id}',function ($id11){
    return "user-id-".$id11;
});*/
/*Route::get('user/{name?}',function ($name = 'pang'){
    return "user-name-".$name;
});
Route::get('user/{name?}',function ($name = 'pang'){
    return "user-name-".$name;
})->where('name','[A-Za-z]+');
Route::get('user/{id}/{name?}',function ($id,$name = 'pang'){
    return "user-name-".$name.'-id-'.$id;
})->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+']);*/

//路由重定向
Route::redirect('hello','hello2');
//路由view
Route::view('hello-view','view_demo',['name'=>'tokey']);
//路由别名
/*Route::get('user/center1',['as'=>'center',function(){
    echo route('center');
}]);*/


//路由群组
Route::group(['prefix'=>'pang'],function (){
    Route::get('user/center1',['as'=>'center',function(){
        echo route('center');
    }]);
    Route::get('user/center2',['as'=>'center2',function(){
        echo route('center2');
    }]);
});
//操作控制器
//Route::get('user/info/{id}',['uses'=>'Api\V1\UserController@info'])->where(['id'=>'[0-9]+']);

//

Route::group(['namespace'=>'Api\V1','prefix'=>'api/v1','middleware'=>'checkage'],function (){
    Route::get('user/info/{id}',['uses'=>'UserController@info'])->where(['id'=>'[0-9]+']);
});

//隐式绑定
Route::get('ys-bind/{user}',function (App\User $user){
    echo $user->email;
});

//