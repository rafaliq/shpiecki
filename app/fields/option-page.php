<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option_page');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-szablonu');

$option_page
    ->addTab('Kontakt', ['placement' => 'left'])
        ->addText('name', ['label' => 'Nazwa firmy'])
        ->addText('person', ['label' => 'Prezes zarządu'])
        ->addTextarea('address', ['label' => 'Adres firmy', 'rows' => '2', 'new_lines' => 'br'])
        ->addText('phone', ['label' => 'Telefon'])
        ->addText('phone2', ['label' => 'Telefon kom.'])
        ->addText('email', ['label' => 'Email firmowy'])
    ->addTab('Header', ['placement' => 'left'])
        ->addImage('logo')
    ->addTab('Mapa', ['placement' => 'left'])
        ->addRepeater('pins')
            ->addImage('icon', ['label'=>'icon'])
            ->addGoogleMap('pin')
            ->addWysiwyg('tooltip')
        ->endRepeater()
    ->addTab('Stopka', ['placement' => 'left'])
        ->addText('copyright')
        ->addImage('iqlogo', ['label' => 'Wykonanie']);

return $option_page;