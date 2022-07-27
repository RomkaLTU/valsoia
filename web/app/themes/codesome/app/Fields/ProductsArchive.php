<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ProductsArchive extends Field
{
    public function fields(): array
    {
        $fields = new FieldsBuilder('product_archive');

        $fields
            ->setLocation('page_template', '==', 'template-products.blade.php');

        $fields->addImage('header_bg', [
            'label' => 'Header background',
            'instructions' => '',
            'multiple' => false,
            'return_format' => 'id',
            'library' => 'all',
            'min_size' => '',
            'max_size' => '',
            'mime_types' => '',
        ]);

        $fields->addText('title', [
            'label' => 'Title',
            'instructions' => '',
            'required' => 1,
            'default_value' => __('Our products', 'code'),
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ]);

        return $fields->build();
    }
}
