<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$gallery = new FieldsBuilder('gallery', ['label' => 'galeria']);

$gallery
    ->addFields(get_field_partial('components.title'))
    ->addGallery('gallery')

    ->addRadio('button', ['title'=>'Pokaż button', 'label' => 'Przycisk'])
    ->addChoices('nie', 'tak')

    ->addLink('link', ['label' => 'link'])
        ->conditional('button', '==', 'tak');

return $gallery;