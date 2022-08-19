<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class TaxonomyFields extends Partial
{

    public function fields()
    {
        $fields = new FieldsBuilder('taxonomyFields');

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

        $fields->addImage('background_m', [
            'label' => 'Background mobile',
            'instructions' => '',
            'multiple' => false,
            'return_format' => 'id',
            'library' => 'all',
            'min_size' => '',
            'max_size' => '',
            'mime_types' => '',
        ]);

        return $fields;
    }
}
