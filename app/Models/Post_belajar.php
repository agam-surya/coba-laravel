<!-- <?php

        namespace App\Models;

        class PostBelajar
        {
            private static $news = [
                [
                    'title' => 'post 1',
                    'category_id' => 1,
                    'slug' => 'post-1',
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, minima eveniet possimus rerum unde sint! Repudiandae quis veniam at aliquid? Error, laudantium corrupti? Reprehenderit aliquid aliquam perspiciatis beatae id consectetur.',
                ],
                [
                    'title' => 'post 2',
                    'category_id' => 1,
                    'slug' => 'post-2',
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, minima eveniet possimus rerum unde sint! Repudiandae quis veniam at aliquid? Error, laudantium corrupti? Reprehenderit aliquid aliquam perspiciatis beatae id consectetur.',
                ],
                [
                    'title' => 'post 3',
                    'category_id' => 2,
                    'slug' => 'post-3',
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, minima eveniet possimus rerum unde sint! Repudiandae quis veniam at aliquid? Error, laudantium corrupti? Reprehenderit aliquid aliquam perspiciatis beatae id consectetur.',
                ],
                [
                    'title' => 'post 4',
                    'category_id' => 3,
                    'slug' => 'post-4',
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, minima eveniet possimus rerum unde sint! Repudiandae quis veniam at aliquid? Error, laudantium corrupti? Reprehenderit aliquid aliquam perspiciatis beatae id consectetur.',
                ],
            ];

            public static function all()
            {
                return collect(self::$news);
            }

            public static function find($slug)
            {
                $news = static::all();

                return $news->firstWhere('slug', $slug);
            }
        }
        ?>
 -->