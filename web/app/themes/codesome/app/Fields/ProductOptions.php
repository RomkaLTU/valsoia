<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ProductOptions extends Field
{
    public function fields(): array
    {
        $fields = new FieldsBuilder('product_options');

        $fields
            ->setLocation('taxonomy', '==', 'product_options');

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

        return $fields->build();
    }
}
