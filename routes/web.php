<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::any('/contact', function () {
    $date = date('d.m.Y');
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view('contact', ['date' => $date]);
})->name('contact');

Route::redirect('/test', '/contact');

Route::prefix('admin')->group(function () {
    Route::get('/post', function () {
        return "Post";
    })->name('post');

    Route::get('/post/{id}/{slug?}', function ($id, $slug = null) {
        return "Post id - $id, slug - $slug";
    })->where(['id' => '[0-9]+', 'slug' => '[A-Za-z0-9-]+'])->name('post_id');
});

Route::fallback(function () {
    $date = date('d.m.Y');
    abort(404, "Page not found...$date",);
});

Route::resource('/posts', PostController::class, ['parameters' => [
    'posts' => 'id'
]]);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/create', [HomeController::class, 'create'])->name('posts.create');
Route::post('/', [HomeController::class, 'store'])->name('posts.store');

Route::get('/page/about', [PageController::class, 'show'])->name('page.about');

Route::match(['get','post'],'/send', [SendController::class, 'send'])->name('send');
