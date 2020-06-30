<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$shops = new FieldsBuilder('shops', ['label' => 'Placówki']);

$shops
    ->addFields(get_field_partial('components.title'))
    ->addTextarea('desc', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addLink('link');

return $shops;