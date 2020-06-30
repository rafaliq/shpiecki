<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$store = new FieldsBuilder('store', ['label' => 'Sklep']);

$store
    ->addRepeater('products', ['label' => 'Polecane produkty', 'min' => 0, 'layout' => 'block'])
        ->addText('title', ['label' => 'Tytuł'])
        ->addLink('link', ['label' => 'Link'])
        ->addImage('image', ['label' => 'zdjęcie produktu']);

return $store;