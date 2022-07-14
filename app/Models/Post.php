<?php

namespace App\Models;

class Post
{
    private static $posts = [
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

    public static function all()
    {
        return collect(self::$posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
