<?php

declare(strict_types=1);

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Product extends Field
{
    public function fields(): array
    {
        $fields = new FieldsBuilder('product');

        $fields
            ->setLocation('post_type', '==', 'products');

        $fields
            ->addTab('Gallery')
            ->addGallery('gallery', [
                'label' => '',
                'min' => 1,
                'max' => 10,
            ]);

        $fields
            ->addTab('Badgets')
            ->addChoiceField('badgets', 'checkbox', [
                'label' => '',
                'multiple' => 1,
                'allow_null' => 1,
                'choices' => [
                    'oat' => 'Made with oat',
                    'almond' => 'Almond',
                    'gluten_free' => 'Gluten free',
                    'palm_oil_free' => 'Palm oil free',
                    'dairy' => 'Dairy free',
                    'certified_plant' => 'Certified plant based',
                    'non_gmo' => 'Non GMO',
                ],
            ]);

        $fields
            ->addTab('Intro text')
            ->addWysiwyg('intro', [
                'label' => '',
                'required' => 0,
                'tabs' => 'all',
                'media_upload' => 0,
                'delay' => 0,
            ]);

        $fields
            ->addTab('Ingredients')
            ->addGroup('ingredients', [
                'label' => '',
                'tabs' => 'all',
                'hide_on_load' => 0,
            ])
                ->addText('title')
                ->addWysiwyg('text')
            ->endGroup();

        $fields
            ->addTab('Nutrition')
            ->addGroup('nutrition', [
                'label' => '',
                'tabs' => 'all',
                'hide_on_load' => 0,
            ])
                ->addText('title')
                ->addImage('image', [
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail',
                ])
            ->endGroup();

        $fields
            ->addTab('Options')
            ->addSelect('colors', [
                'label' => 'Colors',
                'type' => 'select',
                'multiple' => 0,
                'allow_null' => 0,
                'choices' => [
                    'almond' => 'Almond',
                    'croccantino' => 'Croccantino',
                    'pistachio' => 'Pistachio',
                    'chocolate' => 'Chocolate',
                    'espresso' => 'Espresso',
                    'spread' => 'Spread (2 lines)',
                ],
            ])
            ->addGroup('size', [
                'label' => 'Size',
                'tabs' => 'all',
                'hide_on_load' => 0,
            ])
            ->setWrapper(['width' => 50])
            ->addText('title')
            ->addText('text')
            ->endGroup();

        $fields
            ->addGroup('temperature', [
                'label' => 'Temperature',
                'tabs' => 'all',
                'hide_on_load' => 0,
            ])
            ->setWrapper(['width' => 50])
            ->addText('title')
            ->addText('text')
            ->endGroup();

        $fields
            ->addTab('Related products')
            ->addRelationship('related_products', [
                'label' => '',
                'post_type' => 'products',
                'min' => 0,
                'max' => 20,
            ]);

        $fields
            ->addTab('Info banner')
            ->addWysiwyg('info_banner_text', [
                'label' => '',
                'tabs' => 'all',
                'media_upload' => 0,
                'delay' => 0,
            ]);

        return $fields->build();
    }
}
