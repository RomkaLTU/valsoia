<?php

namespace App\Fields;

use App\Fields\Partials\TaxonomyFields;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ProductOptions extends Field
{
    public function fields(): array
    {
        $fields = new FieldsBuilder('product_options');

        $fields
            ->setLocation('taxonomy', '==', 'product_options');

        $fields->addFields(
            $this->get(TaxonomyFields::class)
        );

        return $fields->build();
    }
}
