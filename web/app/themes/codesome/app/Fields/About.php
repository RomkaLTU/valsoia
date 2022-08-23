<?php

declare(strict_types=1);

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class About extends Field
{
    public function fields(): array
    {
        $fields = new FieldsBuilder('about');

        $fields
            ->setLocation('page_template', '==', 'template-about.blade.php');

        $fields
            ->addTab('Video')
            ->addText('video_url');

        $fields
            ->addTab('About')
            ->addText('title')
            ->addText('subtitle')
            ->addTextarea('intro')
            ->addTextarea('intro_text');

        $fields
            ->addTab('Story')
            ->addRepeater('story')
                ->addText('story_title')
                ->addText('story_subtitle')
                ->addWysiwyg('story_text')
                ->addImage('story_image', ['return_format' => 'id'])
            ->endRepeater();

        $fields
            ->addTab('Products')
            ->addText('products_title')
            ->addGroup('About products first', ['name' => 'about_products_first'])
                ->addText('title')
                ->addWysiwyg('text')
                ->addImage('image', ['return_format' => 'id'])
            ->endGroup()
            ->addGroup('About products second', ['name' => 'about_products_second'])
                ->addText('title')
                ->addWysiwyg('text')
                ->addImage('image', ['return_format' => 'id'])
            ->endGroup();

        return $fields->build();
    }
}
