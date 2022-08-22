<?php

declare(strict_types=1);

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class FrontPage extends Field
{
    public function fields(): array
    {
        $fields = new FieldsBuilder('front-page');

        $fields
            ->setLocation('page_type', '==', 'front_page');

        $fields
            ->addTab('Hero')
            ->addGroup('hero')
            ->addLink('slide_1')
            ->addLink('slide_2')
            ->addLink('slide_3')
            ->addLink('slide_4')
            ->endGroup();

        return $fields->build();
    }
}
