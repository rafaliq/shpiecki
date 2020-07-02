<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Dodaj komponent'])
            ->addLayout(get_field_partial('components.gallery'))
            ->addLayout(get_field_partial('components.slider'))
            ->addLayout(get_field_partial('components.hero'))
            ->addLayout(get_field_partial('components.text-img'))
            ->addLayout(get_field_partial('components.boxes-img'))
            ->addLayout(get_field_partial('components.shops'))
            ->addLayout(get_field_partial('components.store'))
            ->addLayout('content', ['label' => 'Treść']);

return $builder;