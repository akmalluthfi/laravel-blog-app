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
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Akmal Luthfi',
        'role' => 'Web Developer'
    ]);
});

Route::get('/blog', function () {
    $posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Nando Septian',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, iste illum. Officia inventore ipsam architecto voluptates, iste ex veritatis exercitationem. Earum qui amet iusto delectus aliquam eos, ipsam deleniti quod, unde maxime totam sint natus, tenetur itaque quis dolorum praesentium commodi ipsa. Debitis itaque esse repellendus illum delectus. Ratione autem ea, molestiae saepe delectus quis eius magni nostrum doloremque laboriosam, commodi pariatur numquam quos quod id enim iste culpa, aliquid explicabo. Doloribus vitae natus voluptates nam similique possimus cum soluta!'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Akmal Luthfi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorum ea asperiores. Minus aliquid aliquam dolorum quia labore facere cum a obcaecati autem reiciendis, necessitatibus alias excepturi voluptates, velit error qui vitae tempora explicabo repellendus laboriosam at accusamus voluptatem? Voluptatum porro quod incidunt tenetur adipisci? Ducimus dolore adipisci, quam consequatur repudiandae tempora! Est ipsum dolorem autem aliquam laboriosam atque suscipit, eligendi optio non numquam doloribus hic cumque sequi, commodi ut harum. Harum, iste. Nemo maxime assumenda delectus labore fuga minima illum reprehenderit libero ullam tempore quibusdam incidunt iste ab quia, dolor magni eius maiores obcaecati rem. Id sed aperiam nostrum!'
        ],
    ];
    return view('posts', [
        'title' => 'Blog',
        'posts' => $posts
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Nando Septian',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, iste illum. Officia inventore ipsam architecto voluptates, iste ex veritatis exercitationem. Earum qui amet iusto delectus aliquam eos, ipsam deleniti quod, unde maxime totam sint natus, tenetur itaque quis dolorum praesentium commodi ipsa. Debitis itaque esse repellendus illum delectus. Ratione autem ea, molestiae saepe delectus quis eius magni nostrum doloremque laboriosam, commodi pariatur numquam quos quod id enim iste culpa, aliquid explicabo. Doloribus vitae natus voluptates nam similique possimus cum soluta!'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Akmal Luthfi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorum ea asperiores. Minus aliquid aliquam dolorum quia labore facere cum a obcaecati autem reiciendis, necessitatibus alias excepturi voluptates, velit error qui vitae tempora explicabo repellendus laboriosam at accusamus voluptatem? Voluptatum porro quod incidunt tenetur adipisci? Ducimus dolore adipisci, quam consequatur repudiandae tempora! Est ipsum dolorem autem aliquam laboriosam atque suscipit, eligendi optio non numquam doloribus hic cumque sequi, commodi ut harum. Harum, iste. Nemo maxime assumenda delectus labore fuga minima illum reprehenderit libero ullam tempore quibusdam incidunt iste ab quia, dolor magni eius maiores obcaecati rem. Id sed aperiam nostrum!'
        ],
    ];

    $currPost = [];

    foreach ($posts as $post) {
        if ($post['slug'] === $slug) {
            $currPost = $post;
        }
    }

    return view('post', [
        'title' => 'Detail Post',
        'post' => $currPost
    ]);
});
