<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$hero = new FieldsBuilder('hero', ['label' => 'Hero']);

$hero
    ->addImage('bg', ['label' => 'Tło'])
    ->addText('title', ['label' => 'Tytuł']);

return $hero;