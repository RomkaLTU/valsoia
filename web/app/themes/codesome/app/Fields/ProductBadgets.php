<?php

declare(strict_types=1);

namespace App\Fields;

use App\Fields\Partials\TaxonomyFields;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ProductBadgets extends Field
{
    public function fields(): array
    {
        $fields = new FieldsBuilder('product_options');

        $fields
            ->setLocation('taxonomy', '==', 'badgets');

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
