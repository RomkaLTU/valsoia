<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class FrontPage extends Composer
{
    protected static $views = [
        'front-page',
    ];

    public function with(): array
    {
        return [
            'products' => $this->getProducts(),
            'instagram' => $this->getInstaFeed(),
        ];
    }

    public function getProducts(): array
    {
        return get_posts([
            'post_type' => 'products',
            'posts_per_page' => 10,
        ]);
    }

    public function getInstaFeed(): array
    {
        // Get the instagram feed

        return [];
    }
}
