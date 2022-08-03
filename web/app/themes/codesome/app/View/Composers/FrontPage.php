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
        ];
    }

    public function getProducts(): array
    {
        return get_posts([
            'post_type' => 'products',
            'post_status' => 'publish',
            'posts_per_page' => 10,
        ]);
    }
}
