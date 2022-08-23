<?php

declare(strict_types=1);

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldNameCollisionException;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Faq extends Field
{
    /**
     * @throws FieldNameCollisionException
     */
    public function fields(): array
    {
        $fields = new FieldsBuilder('faq');

        $fields
            ->setLocation('page_template', '==', 'template-faq.blade.php');

        $fields
            ->addRepeater('items')
                ->addText('question')->setRequired()
                ->addWysiwyg('answer')->setRequired()
            ->endRepeater();

        return $fields->build();
    }
}
