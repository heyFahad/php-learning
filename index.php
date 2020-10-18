<?php

$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'Jeffrey';

unset($person['age']);

require 'index.view.php';