<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'PWA Manifest',
    'description' => 'Make your TYPO3 site installable and offline-ready with a Progressive Web App (PWA) manifest and service worker — faster, more mobile-friendly, better SEO.',
    'category' => 'services',
    'author' => 'Team WebofficeIT, Rahul R S',
    'author_email' => 'info@webofficeit.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.2.2',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-14.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
