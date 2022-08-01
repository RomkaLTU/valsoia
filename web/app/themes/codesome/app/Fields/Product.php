<?php

declare(strict_types=1);

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Product extends Field
{
    public function fields(): array
    {
        $product = new FieldsBuilder('product');

        $product
            ->setLocation('post_type', '==', 'products');

        $product
            ->addGallery('gallery', [
                'min' => 1,
                'max' => 10,
            ]);

        $product
            ->addChoiceField('badgets', 'checkbox', [
                'multiple' => 1,
                'allow_null' => 1,
                'choices' => [
                    'oat' => 'Made with oat',
                    'dairy' => 'Dairy free',
                    'certified_plant' => 'Certified plant based',
                    'non_gmo' => 'Non GMO',
                ],
            ]);

        $product
            ->addWysiwyg('intro', [
                'label' => 'Intro text',
                'required' => 0,
                'tabs' => 'all',
                'media_upload' => 0,
                'delay' => 0,
            ]);

        $product
            ->addGroup('ingredients', [
                'label' => 'Ingredients',
                'tabs' => 'all',
                'hide_on_load' => 0,
            ])
                ->addText('title')
                ->addWysiwyg('text')
            ->endGroup();

        $product
            ->addGroup('nutrition', [
                'label' => 'Nutrition',
                'tabs' => 'all',
                'hide_on_load' => 0,
            ])
                ->addText('title')
                ->addImage('image', [
                    'return_format' => 'id',
                    'preview_size' => 'thumbnail',
                ])
            ->endGroup();

        $product
            ->addGroup('size', [
                'label' => 'Size',
                'tabs' => 'all',
                'hide_on_load' => 0,
            ])
            ->addText('title')
            ->addText('text')
            ->endGroup();

        $product
            ->addGroup('temperature', [
                'label' => 'Temperature',
                'tabs' => 'all',
                'hide_on_load' => 0,
            ])
            ->addText('title')
            ->addText('text')
            ->endGroup();

        return $product->build();
    }
}
