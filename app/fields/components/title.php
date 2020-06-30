<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$title = new FieldsBuilder('title', ['label' => 'Tytuł']);

$title
    ->addRadio('header', ['title'=>'Pokaż tytuł sekcji?', 'label' => 'Tytuł sekcji'])
        ->setInstructions('Pokaż tytuł sekcji.')
        ->addChoices('nie', 'tak')

    ->addText('title', ['label' => 'Tytuł'])
        ->setInstructions('Wprowadź tytuł')
        ->conditional('header', '==', 'tak');

return $title;