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
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        User::create([
            'name' => 'Muhammad Iqbal',
            'username' => 'muhammadiqbal',
            'email' => 'iqbal@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Post::factory(20)->create();

                // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // User::create([
        //     'name' => 'Doddy coy',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'orem ipsum dolor, sit amet consectetur adipisicing elit. Eum minima nobis vero atque laudantium porro ipsam aut a. Dolore, iusto incidunt? Totam reiciendis provident at odio beatae',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, dolorum rem deserunt, officiis incidunt minima libero molestiae cumque expedita autem iste sunt quis aliquam ab sed asperiores veritatis perspiciatis nesciunt. Adipisci animi assumenda, modi nisi quam id facilis. Expedita repellat optio explicabo quisquam nihil assumenda esse ab nostrum qui, animi sit? Eaque amet doloribus, tenetur deserunt aliquam, rem quia, odit illum provident animi pariatur? Quaerat accusamus dolore, hic eveniet voluptatum eaque nihil autem neque, ullam adipisci aliquid. Commodi, sint error praesentium, culpa quidem illo delectus autem sapiente iure itaque cupiditate non dolores exercitationem dolorum minus, architecto eaque? Quaerat porro quidem nobis rerum enim laborum reprehenderit, sint officia dignissimos modi eaque harum pariatur esse aspernatur accusamus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'orem ipsum dolor, sit amet consectetur adipisicing elit. Eum minima nobis vero atque laudantium porro ipsam aut a. Dolore, iusto incidunt? Totam reiciendis provident at odio beatae',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, dolorum rem deserunt, officiis incidunt minima libero molestiae cumque expedita autem iste sunt quis aliquam ab sed asperiores veritatis perspiciatis nesciunt. Adipisci animi assumenda, modi nisi quam id facilis. Expedita repellat optio explicabo quisquam nihil assumenda esse ab nostrum qui, animi sit? Eaque amet doloribus, tenetur deserunt aliquam, rem quia, odit illum provident animi pariatur? Quaerat accusamus dolore, hic eveniet voluptatum eaque nihil autem neque, ullam adipisci aliquid. Commodi, sint error praesentium, culpa quidem illo delectus autem sapiente iure itaque cupiditate non dolores exercitationem dolorum minus, architecto eaque? Quaerat porro quidem nobis rerum enim laborum reprehenderit, sint officia dignissimos modi eaque harum pariatur esse aspernatur accusamus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'orem ipsum dolor, sit amet consectetur adipisicing elit. Eum minima nobis vero atque laudantium porro ipsam aut a. Dolore, iusto incidunt? Totam reiciendis provident at odio beatae',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, dolorum rem deserunt, officiis incidunt minima libero molestiae cumque expedita autem iste sunt quis aliquam ab sed asperiores veritatis perspiciatis nesciunt. Adipisci animi assumenda, modi nisi quam id facilis. Expedita repellat optio explicabo quisquam nihil assumenda esse ab nostrum qui, animi sit? Eaque amet doloribus, tenetur deserunt aliquam, rem quia, odit illum provident animi pariatur? Quaerat accusamus dolore, hic eveniet voluptatum eaque nihil autem neque, ullam adipisci aliquid. Commodi, sint error praesentium, culpa quidem illo delectus autem sapiente iure itaque cupiditate non dolores exercitationem dolorum minus, architecto eaque? Quaerat porro quidem nobis rerum enim laborum reprehenderit, sint officia dignissimos modi eaque harum pariatur esse aspernatur accusamus?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'orem ipsum dolor, sit amet consectetur adipisicing elit. Eum minima nobis vero atque laudantium porro ipsam aut a. Dolore, iusto incidunt? Totam reiciendis provident at odio beatae',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, dolorum rem deserunt, officiis incidunt minima libero molestiae cumque expedita autem iste sunt quis aliquam ab sed asperiores veritatis perspiciatis nesciunt. Adipisci animi assumenda, modi nisi quam id facilis. Expedita repellat optio explicabo quisquam nihil assumenda esse ab nostrum qui, animi sit? Eaque amet doloribus, tenetur deserunt aliquam, rem quia, odit illum provident animi pariatur? Quaerat accusamus dolore, hic eveniet voluptatum eaque nihil autem neque, ullam adipisci aliquid. Commodi, sint error praesentium, culpa quidem illo delectus autem sapiente iure itaque cupiditate non dolores exercitationem dolorum minus, architecto eaque? Quaerat porro quidem nobis rerum enim laborum reprehenderit, sint officia dignissimos modi eaque harum pariatur esse aspernatur accusamus?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}





