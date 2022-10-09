<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "judul post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adit",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nam porro velit rem eveniet earum mollitia necessitatibus magnam eum. Debitis architecto quas rerum nobis sed odio beatae. Vel, impedit. Placeat!"
        ],
        [
            "title" => "judul post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Iqbal",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis laboriosam molestias voluptates pariatur blanditiis porro voluptatem mollitia, facere vitae temporibus aliquid perspiciatis maxime ipsam ducimus natus in excepturi delectus error! Cumque officia consequuntur, numquam cum blanditiis veritatis omnis exercitationem tempore, nobis quod, consectetur vel. Iure voluptatibus, in fugit modi necessitatibus rerum nulla quos veniam voluptates velit dolorem aspernatur repellat soluta doloremque ut suscipit ea officia architecto ullam neque autem. Perspiciatis exercitationem ex, nostrum beatae a in natus nihil ut tempore non? Fugit veniam dolore voluptatum ex quidem pariatur iure consequatur quaerat ut? Dolor, laudantium aliquid illo amet modi ad consequuntur?"
        ],
    
        ];

        public static function all() 
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug) 
        {
            $posts = static::all();
            return $posts -> firstWhere('slug', $slug);
        }
}
