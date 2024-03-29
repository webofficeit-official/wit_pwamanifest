<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[WIT] Pwamanifest',
    'description' => 'This extension is to create an interface where you can manage your manifest data which can used to generate a PWA.',
    'category' => 'services',
    'author' => 'Team WebofficeIT, Rahul R S',
    'author_email' => 'info@webofficeit.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
