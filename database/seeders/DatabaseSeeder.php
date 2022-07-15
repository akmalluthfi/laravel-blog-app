<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Akmal Luthfi',
            'email' => 'akmalluthfi19@gmail.com',
            'password' => Hash::make('akmalluthfi'),
        ]);

        User::create([
            'name' => 'Nando Septian Prisandy',
            'email' => 'nando@gmail.com',
            'password' => Hash::make('nandoseptian'),
        ]);

        User::create([
            'name' => 'Acmad Zuhril Facrizal',
            'email' => 'zuhril@gmail.com',
            'password' => Hash::make('zuhril'),
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'category_id' => 1,
            'user_id' => 1,
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero quos quod necessitatibus sint! Ea incidunt repellat voluptatem itaque non molestias possimus',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero quos quod necessitatibus sint! Ea incidunt repellat voluptatem itaque non molestias possimus tempora saepe nemo, libero ducimus, atque perferendis eos modi ratione? Possimus, voluptates dicta eligendi dignissimos sapiente quisquam rem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, accusantium atque. Optio mollitia aliquam quam nisi, hic eveniet placeat quae magni numquam porro ea recusandae modi, impedit nemo. Minima molestias enim aspernatur sunt corporis rerum error porro, commodi omnis adipisci.</p>',
        ]);
        Post::create([
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'category_id' => 1,
            'user_id' => 2,
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero quos quod necessitatibus sint! Ea incidunt repellat voluptatem itaque non molestias possimus',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero quos quod necessitatibus sint! Ea incidunt repellat voluptatem itaque non molestias possimus tempora saepe nemo, libero ducimus, atque perferendis eos modi ratione? Possimus, voluptates dicta eligendi dignissimos sapiente quisquam rem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, accusantium atque. Optio mollitia aliquam quam nisi, hic eveniet placeat quae magni numquam porro ea recusandae modi, impedit nemo. Minima molestias enim aspernatur sunt corporis rerum error porro, commodi omnis adipisci.</p>',
        ]);
        Post::create([
            'title' => 'Judul Post Ketiga',
            'slug' => 'judul-post-ketiga',
            'category_id' => 2,
            'user_id' => 2,
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero quos quod necessitatibus sint! Ea incidunt repellat voluptatem itaque non molestias possimus',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero quos quod necessitatibus sint! Ea incidunt repellat voluptatem itaque non molestias possimus tempora saepe nemo, libero ducimus, atque perferendis eos modi ratione? Possimus, voluptates dicta eligendi dignissimos sapiente quisquam rem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, accusantium atque. Optio mollitia aliquam quam nisi, hic eveniet placeat quae magni numquam porro ea recusandae modi, impedit nemo. Minima molestias enim aspernatur sunt corporis rerum error porro, commodi omnis adipisci.</p>',
        ]);
        Post::create([
            'title' => 'Judul Post Keempat',
            'slug' => 'judul-post-keempat',
            'category_id' => 2,
            'user_id' => 3,
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero quos quod necessitatibus sint! Ea incidunt repellat voluptatem itaque non molestias possimus',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero quos quod necessitatibus sint! Ea incidunt repellat voluptatem itaque non molestias possimus tempora saepe nemo, libero ducimus, atque perferendis eos modi ratione? Possimus, voluptates dicta eligendi dignissimos sapiente quisquam rem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, accusantium atque. Optio mollitia aliquam quam nisi, hic eveniet placeat quae magni numquam porro ea recusandae modi, impedit nemo. Minima molestias enim aspernatur sunt corporis rerum error porro, commodi omnis adipisci.</p>',
        ]);
        Post::create([
            'title' => 'Judul Post Kelima',
            'slug' => 'judul-post-kelima',
            'category_id' => 3,
            'user_id' => 1,
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero quos quod necessitatibus sint! Ea incidunt repellat voluptatem itaque non molestias possimus',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero quos quod necessitatibus sint! Ea incidunt repellat voluptatem itaque non molestias possimus tempora saepe nemo, libero ducimus, atque perferendis eos modi ratione? Possimus, voluptates dicta eligendi dignissimos sapiente quisquam rem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, accusantium atque. Optio mollitia aliquam quam nisi, hic eveniet placeat quae magni numquam porro ea recusandae modi, impedit nemo. Minima molestias enim aspernatur sunt corporis rerum error porro, commodi omnis adipisci.</p>',
        ]);
    }
}
