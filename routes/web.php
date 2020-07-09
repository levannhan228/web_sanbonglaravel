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
    return view('Component.HomePage.loginpage');
});
//LoginPage
Route::get('loginpage', function () {
    return view('Component.HomePage.loginpage');
});
//Đăng ký
Route::post('signup','AccountController@Signup');
//Đăng nhập
Route::post('signin','AccountController@Signin');
//Đăng xuất
Route::get('logout','AccountController@Logout' );
//HomePage
Route::get('homepage','StadiumController@showHot' );
//List Stadium
Route::get('pagestadium','StadiumController@showList');
Route::get('nhantao','StadiumController@showListnhantao');
Route::get('tunhien','StadiumController@showListtunhien');
Route::get('cat','StadiumController@showListcat');
//Contact
Route::get('contactpage', function () {
    return view('Component.Contact.contactpage');
});
//News
Route::get('news', function () {
    return view('Component.News.news');
});
//Chi tiết sân
Route::get('detail/{id}','StadiumController@getDetail');
//Đặt sân
Route::get('bookyard/{id}','StadiumController@getBookyard');
Route::post('bookyard','StadiumController@postBookyard');
//Admin
Route::get('admin', function () {
    if(Session::get('permissions')==1){
    return view('Admin.dashboard');
    }else{
    return view('errors.404');
    }
});
Route::get('user_master', function () {
    if(Session::get('permissions')==2){
    return view('Admin.Calendar.chusancalendar');
    }else{
    return view('errors.404');
    }
});
Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'account'],function(){
        Route::get('list','AccountController@getList');
        Route::post('create','AccountController@postCreate');
        Route::post('edit','AccountController@postEdit');
        Route::post('delete','AccountController@postDelete');
        });	
    Route::group(['prefix'=>'stadium'],function(){
        Route::get('list','StadiumController@getList');
        Route::get('create','StadiumController@getCreate_stadium');
        Route::post('create','StadiumController@posttCreate_stadium');
        Route::get('edit/{id}','StadiumController@getEdit_stadium');
        Route::post('edit/{id}','StadiumController@postEdit_stadium');
        Route::post('delete','StadiumController@postDelete_stadium');
        Route::get('introduce','StadiumController@getIntroduce');
        });
    Route::group(['prefix'=>'bookyard'],function(){
        Route::get('list','BookyardController@getList'); 
        Route::post('delete','BookyardController@postDelete_bookyard');       
        });
    Route::get('calendar','CalendarController@getList');
    Route::post('calendar','CalendarController@postCalendar');
});

//xuat file
Route::get('export', 'ExportControllerUser@export')->name('export');
Route::get('export_sadium', 'ExportControllerStadium@export_stadium')->name('export_sadium');
//


