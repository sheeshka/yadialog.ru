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
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/mindmap', function () {
    return view('mindmap');
});

Route::get('/landos', function () {
    return view('landos');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/story', function () {
    return view('story');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('sitemap.xml', 'BlogController@sitemap');

public function sitemap() {
    $posts = Post::get();
    return view('sitemap')->with(compact('posts'));
}
