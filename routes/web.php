<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
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
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'name' => 'Akmal Luthfi',
        'role' => 'Web Developer'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/categories', function () {
    return view('categories', [
        'title' => 'Blog Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::redirect('/blog/category', '/blog/categories');

Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/blog/category/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'active' => 'blog',
        'category' => $category->name,
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', function () {
            return view('dashboard.index');
        });

        Route::get('/posts', function () {
            return view('dashboard.posts');
        });
    });
});

Route::any('{author:username}', function (User $author) {
    return view('author', [
        'title' => $author->username,
        'active' => 'author',
        'name' => $author->name,
        'posts' => $author->posts->load('category', 'author')
    ]);
});
