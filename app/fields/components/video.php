<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$video = new FieldsBuilder('video', ['label' => 'Filmik']);

$video
    ->addFile('video', ['label' => 'Filmik']);

return $video;