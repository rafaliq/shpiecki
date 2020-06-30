<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('page');

$page
    ->setLocation('post_type', '==', 'page')
        ->or('post_type', '==', 'placowki');

$page
    ->addFields(get_field_partial('partials.builder'))
    ->addFields(get_field_partial('partials.main'));

return $page;