<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Muhammad Ghiffari',
            'username' => 'ghiffari',
            'email' => 'muhammadghiffari40@gmail.com',
            'password' => bcrypt('password')
        ]);
        
        // User::create([
        //     'name' => 'Reffan',
        //     'email' => 'reffan@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();
        


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus unde officiis saepe. Earum eos est,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus unde officiis saepe. Earum eos est, eum ullam praesentium nam illo laborum deleniti cupiditate molestias, aspernatur voluptatem atque sapiente natus doloremque architecto delectus cum excepturi, iste quam vel odit voluptas nobis. Perferendis quod sapiente ipsum debitis omnis quia velit. Unde illum assumenda sapiente ipsum, reprehenderit maxime repellat praesentium quidem tempore, repellendus optio! Excepturi atque reiciendis architecto deserunt eveniet tenetur autem repellendus doloribus dolore dicta, esse ducimus fugit a molestias iste labore amet modi veniam distinctio, natus in fuga? Ipsam rem est dolor quasi iste, eligendi corrupti ea in inventore non maiores.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus unde officiis saepe. Earum eos est,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus unde officiis saepe. Earum eos est, eum ullam praesentium nam illo laborum deleniti cupiditate molestias, aspernatur voluptatem atque sapiente natus doloremque architecto delectus cum excepturi, iste quam vel odit voluptas nobis. Perferendis quod sapiente ipsum debitis omnis quia velit. Unde illum assumenda sapiente ipsum, reprehenderit maxime repellat praesentium quidem tempore, repellendus optio! Excepturi atque reiciendis architecto deserunt eveniet tenetur autem repellendus doloribus dolore dicta, esse ducimus fugit a molestias iste labore amet modi veniam distinctio, natus in fuga? Ipsam rem est dolor quasi iste, eligendi corrupti ea in inventore non maiores.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus unde officiis saepe. Earum eos est,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus unde officiis saepe. Earum eos est, eum ullam praesentium nam illo laborum deleniti cupiditate molestias, aspernatur voluptatem atque sapiente natus doloremque architecto delectus cum excepturi, iste quam vel odit voluptas nobis. Perferendis quod sapiente ipsum debitis omnis quia velit. Unde illum assumenda sapiente ipsum, reprehenderit maxime repellat praesentium quidem tempore, repellendus optio! Excepturi atque reiciendis architecto deserunt eveniet tenetur autem repellendus doloribus dolore dicta, esse ducimus fugit a molestias iste labore amet modi veniam distinctio, natus in fuga? Ipsam rem est dolor quasi iste, eligendi corrupti ea in inventore non maiores.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus unde officiis saepe. Earum eos est,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus unde officiis saepe. Earum eos est, eum ullam praesentium nam illo laborum deleniti cupiditate molestias, aspernatur voluptatem atque sapiente natus doloremque architecto delectus cum excepturi, iste quam vel odit voluptas nobis. Perferendis quod sapiente ipsum debitis omnis quia velit. Unde illum assumenda sapiente ipsum, reprehenderit maxime repellat praesentium quidem tempore, repellendus optio! Excepturi atque reiciendis architecto deserunt eveniet tenetur autem repellendus doloribus dolore dicta, esse ducimus fugit a molestias iste labore amet modi veniam distinctio, natus in fuga? Ipsam rem est dolor quasi iste, eligendi corrupti ea in inventore non maiores.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}
