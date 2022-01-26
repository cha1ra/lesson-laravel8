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

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/tweets', function () {

    $tweet = new stdClass(); // オブジェクトを作成
    $tweet->message = 'Laravelからのメッセージ';
    $tweet->created_at = '2022/01/01 00:00';

    return view('tweets', [
        'tweet' => $tweet
    ]);
});

