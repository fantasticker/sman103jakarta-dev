<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Admin',
                'image' => '/storage/images/upacara HUT RI.jpg',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, obcaecati! Sit animi deleniti asperiores esse molestiae saepe et pariatur nostrum ea incidunt? Eaque iusto libero vel vero doloremque officiis? A, inventore ullam iusto nostrum architecto sed. Omnis quidem perspiciatis magnam ut fuga recusandae nulla mollitia voluptas harum aliquid officiis, esse blanditiis illo facere voluptatum inventore nobis corrupti ipsa sed ipsum, quos dicta corporis rem vitae? At, eos. Assumenda quae minima facilis quo quasi, quos itaque dignissimos cupiditate magnam sunt odio. Nihil unde dolores ratione odit excepturi saepe nam perferendis alias eaque eius expedita, voluptatibus nulla eveniet sequi magni fugiat totam.'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Admin',
                'image' => '/storage/images/upacara HUT RI.jpg',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eum alias iure cum, distinctio temporibus eius facere. Optio eius, debitis quidem, veritatis reprehenderit fugit eum soluta aperiam odio sint minima placeat! Adipisci, autem minus deserunt repellat ratione veritatis, modi aliquid voluptatem quasi earum soluta voluptate exercitationem labore maxime hic explicabo voluptates libero possimus neque. Commodi impedit natus sed at omnis fugit, quisquam nobis perferendis quaerat debitis voluptatum ab alias eaque! Esse, culpa deserunt facilis quos quasi veniam suscipit, reiciendis sapiente aspernatur ut eaque ipsa! Vitae, nam quasi exercitationem modi id dignissimos facilis! Accusantium quas doloremque deleniti quasi maiores, consequatur veniam?'
            ],
            [
                'id' => '3',
                'slug' => 'judul-artikel-3',
                'title' => 'Judul Artikel 3',
                'author' => 'Admin',
                'image' => '/storage/images/upacara HUT RI.jpg',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, obcaecati! Sit animi deleniti asperiores esse molestiae saepe et pariatur nostrum ea incidunt? Eaque iusto libero vel vero doloremque officiis? A, inventore ullam iusto nostrum architecto sed. Omnis quidem perspiciatis magnam ut fuga recusandae nulla mollitia voluptas harum aliquid officiis, esse blanditiis illo facere voluptatum inventore nobis corrupti ipsa sed ipsum, quos dicta corporis rem vitae? At, eos. Assumenda quae minima facilis quo quasi, quos itaque dignissimos cupiditate magnam sunt odio. Nihil unde dolores ratione odit excepturi saepe nam perferendis alias eaque eius expedita, voluptatibus nulla eveniet sequi magni fugiat totam.'
            ],
            [
                'id' => '4',
                'slug' => 'judul-artikel-4',
                'title' => 'Judul Artikel 4',
                'author' => 'Admin',
                'image' => '/storage/images/upacara HUT RI.jpg',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, obcaecati! Sit animi deleniti asperiores esse molestiae saepe et pariatur nostrum ea incidunt? Eaque iusto libero vel vero doloremque officiis? A, inventore ullam iusto nostrum architecto sed. Omnis quidem perspiciatis magnam ut fuga recusandae nulla mollitia voluptas harum aliquid officiis, esse blanditiis illo facere voluptatum inventore nobis corrupti ipsa sed ipsum, quos dicta corporis rem vitae? At, eos. Assumenda quae minima facilis quo quasi, quos itaque dignissimos cupiditate magnam sunt odio. Nihil unde dolores ratione odit excepturi saepe nam perferendis alias eaque eius expedita, voluptatibus nulla eveniet sequi magni fugiat totam.'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($p) => $p['slug'] == $slug);

        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
