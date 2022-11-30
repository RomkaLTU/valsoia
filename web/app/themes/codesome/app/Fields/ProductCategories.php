<?php

declare(strict_types=1);

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ProductCategories extends Field
{
    public function fields(): array
    {
        $fields = new FieldsBuilder('product_categories');

        $fields
            ->setLocation('taxonomy', '==', 'product_categories');

        $fields->addWysiwyg('description', [
            'label' => 'Description',
            'instructions' => 'Add a description for this category',
            'media_upload' => 0,
        ]);

        $fields->addImage('icon', [
            'label' => 'Icon',
            'instructions' => '',
            'multiple' => false,
            'return_format' => 'id',
            'library' => 'all',
            'min_size' => '',
            'max_size' => '',
            'mime_types' => '',
        ]);

        $fields->addImage('background', [
            'label' => 'Background',
            'instructions' => '',
            'multiple' => false,
            'return_format' => 'id',
            'library' => 'all',
            'min_size' => '',
            'max_size' => '',
            'mime_types' => '',
        ]);

        $fields->addTrueFalse('transparent_image_bg', [
            'label' => 'Transparent image background',
            'default_value' => 0,
        ]);

        return $fields->build();
    }
}
