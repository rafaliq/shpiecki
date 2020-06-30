<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$boxesImg = new FieldsBuilder('boxes-img', ['label' => 'boxy ze zdjęciami']);

$boxesImg
    ->addFields(get_field_partial('components.title'))
    ->addTextarea('desc', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addLink('link', ['label' => 'Przycisk więcej'])
    ->addRepeater('images', ['label' => 'Zdjęcia'])
      ->addImage('image', ['label' => 'Zdjęcie'])
      ->addText('titleImg', ['label' => 'Tytuł zdjęcia'])
    ->addRadio('button', ['title'=>'Obrazek z odnośnikiem'])
      ->addChoices('nie', 'tak')
    ->addLink('link')
      ->conditional('button', '==', 'tak');

return $boxesImg;