<?php

$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortName'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.short_name',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestName'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.name',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestId'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.id',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestStartUrl'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.start_url',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestbackgroundColor'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.color',
    'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 20
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestDisplay'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.display',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['Standalone', 'standalone'],
            ['Fullscreen', 'fullscreen'],
            ['Minimal UI', 'minimal-ui'],
            ['Browser', 'browser']
        ]
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScope'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.scope',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestThemeColor'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.theme_color',
    'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 20
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestDescription'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.description',
    'config' => [
        'type' => 'text',
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestSmallIconPath'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.small_icon_path',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestSmallIconType'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.small_icon_type',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestSmallIconSize'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.small_icon_size',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestBigIconPath'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.big_icon_path',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestBigIconType'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.big_icon_type',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestBigIconSize'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.big_icon_size',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];

$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts1Name'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_name',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts1ShortName'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_short_name',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts1Description'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_description',
    'config' => [
        'type' => 'text',
        'size' => 50,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts1Url'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_url',
    'description' => 'A Shortcut requires a URL to perform any function. This URL must be within the web app manifests scope. If the URL is relative, the base URL will be the web app manifests URL.',
    'config' => [
        'size' => 50,
        'eval' => 'trim',
        'renderType' => 'inputLink',
        'type' => 'input',
        'fieldControl' => [
            'linkPopup' => [
                'options' => [
                    'blindLinkOptions' => 'file,telephone,mail,spec,folder',
                ],
            ],
        ],
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts1IconSrc'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_icon_src',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts1IconSizes'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_icon_sizes',
    'config' => [
        'type' => 'input',
        'placeholder' => '192x192',
        'size' => 20,
        'eval' => 'trim'
    ],
];

$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts2Name'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_name',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts2ShortName'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_short_name',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts2Description'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_description',
    'config' => [
        'type' => 'text',
        'size' => 50,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts2Url'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_url',
    'description' => 'A Shortcut requires a URL to perform any function. This URL must be within the web app manifests scope. If the URL is relative, the base URL will be the web app manifests URL.',
    'config' => [
        'size' => 50,
        'eval' => 'trim',
        'renderType' => 'inputLink',
        'type' => 'input',
        'fieldControl' => [
            'linkPopup' => [
                'options' => [
                    'blindLinkOptions' => 'file,telephone,mail,spec,folder',
                ],
            ],
        ],
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts2IconSrc'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_icon_src',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts2IconSizes'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_icon_sizes',
    'config' => [
        'type' => 'input',
        'placeholder' => '192x192',
        'size' => 20,
        'eval' => 'trim'
    ],
];

$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts3Name'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_name',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts3ShortName'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_short_name',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts3Description'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_description',
    'config' => [
        'type' => 'text',
        'size' => 50,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts3Url'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_url',
    'description' => 'A Shortcut requires a URL to perform any function. This URL must be within the web app manifests scope. If the URL is relative, the base URL will be the web app manifests URL.',
    'config' => [
        'size' => 50,
        'eval' => 'trim',
        'renderType' => 'inputLink',
        'type' => 'input',
        'fieldControl' => [
            'linkPopup' => [
                'options' => [
                    'blindLinkOptions' => 'file,telephone,mail,spec,folder',
                ],
            ],
        ],
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts3IconSrc'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_icon_src',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestShortcuts3IconSizes'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.shortcut_icon_sizes',
    'config' => [
        'type' => 'input',
        'placeholder' => '192x192',
        'size' => 20,
        'eval' => 'trim'
    ],
];

$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScreenshot1Src'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.screenshot_src',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScreenshot1Type'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.screenshot_type',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScreenshot1Size'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.screenshot_size',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScreenshot1FormFactor'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.screenshot_form_factor',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['wide', 'wide'],
            ['narrow', 'narrow']
        ]
    ],
];

$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScreenshot2Src'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.screenshot_src',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScreenshot2Type'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.screenshot_type',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScreenshot2Size'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.screenshot_size',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScreenshot2FormFactor'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.screenshot_form_factor',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['wide', 'wide'],
            ['narrow', 'narrow']
        ]
    ],
];

$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScreenshot3Src'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.screenshot_src',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScreenshot3Type'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.screenshot_type',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScreenshot3Size'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.screenshot_size',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['WitPwamanifestScreenshot3FormFactor'] = [
    'label' => 'LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.wit_pwamanifest.screenshot_form_factor',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['wide', 'wide'],
            ['narrow', 'narrow']
        ]
    ],
];

// And new palette
$GLOBALS['SiteConfiguration']['site']['palettes']['WitPwamanifestName']['showitem'] = 'WitPwamanifestShortName, WitPwamanifestName, WitPwamanifestStartUrl, --linebreak--, WitPwamanifestScope, WitPwamanifestId, WitPwamanifestDisplay, --linebreak--,WitPwamanifestbackgroundColor, WitPwamanifestThemeColor, WitPwamanifestDescription';
$GLOBALS['SiteConfiguration']['site']['palettes']['WitPwamanifestIcons']['showitem'] = 'WitPwamanifestSmallIconPath, WitPwamanifestSmallIconType, WitPwamanifestSmallIconSize, --linebreak--, WitPwamanifestBigIconPath, WitPwamanifestBigIconType, WitPwamanifestBigIconSize';
$GLOBALS['SiteConfiguration']['site']['palettes']['WitPwamanifestShortcuts1']['showitem'] = 'WitPwamanifestShortcuts1Name, WitPwamanifestShortcuts1ShortName, WitPwamanifestShortcuts1IconSizes, --linebreak--, WitPwamanifestShortcuts1Url, WitPwamanifestShortcuts1Description, WitPwamanifestShortcuts1IconSrc';
$GLOBALS['SiteConfiguration']['site']['palettes']['WitPwamanifestShortcuts2']['showitem'] = 'WitPwamanifestShortcuts2Name, WitPwamanifestShortcuts2ShortName, WitPwamanifestShortcuts2IconSizes, --linebreak--, WitPwamanifestShortcuts2Url, WitPwamanifestShortcuts2Description, WitPwamanifestShortcuts2IconSrc';
$GLOBALS['SiteConfiguration']['site']['palettes']['WitPwamanifestShortcuts3']['showitem'] = 'WitPwamanifestShortcuts3Name, WitPwamanifestShortcuts3ShortName, WitPwamanifestShortcuts3IconSizes, --linebreak--, WitPwamanifestShortcuts3Url, WitPwamanifestShortcuts3Description, WitPwamanifestShortcuts3IconSrc';
$GLOBALS['SiteConfiguration']['site']['palettes']['WitPwamanifestScreenshot1']['showitem'] = 'WitPwamanifestScreenshot1Src, WitPwamanifestScreenshot1Type, WitPwamanifestScreenshot1Size, WitPwamanifestScreenshot1FormFactor';
$GLOBALS['SiteConfiguration']['site']['palettes']['WitPwamanifestScreenshot2']['showitem'] = 'WitPwamanifestScreenshot2Src, WitPwamanifestScreenshot2Type, WitPwamanifestScreenshot2Size, WitPwamanifestScreenshot2FormFactor';
$GLOBALS['SiteConfiguration']['site']['palettes']['WitPwamanifestScreenshot3']['showitem'] = 'WitPwamanifestScreenshot3Src, WitPwamanifestScreenshot3Type, WitPwamanifestScreenshot3Size, WitPwamanifestScreenshot3FormFactor';

// And add it to showitem
$GLOBALS['SiteConfiguration']['site']['types']['0']['showitem'] = '--palette--;;default,--palette--;;base,
--div--;LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.wit_pwamanifest;WitPwamanifestName,--palette--;LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.wit_pwamanifest_name;WitPwamanifestName,--palette--;LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.wit_pwamanifest_icons;WitPwamanifestIcons,
--div--;LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.wit_pwamanifest_shortcuts;WitPwamanifestName,--palette--;LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.wit_pwamanifest_shortcut_1;WitPwamanifestShortcuts1,--palette--;LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.wit_pwamanifest_shortcut_2;WitPwamanifestShortcuts2,--palette--;LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.wit_pwamanifest_shortcut_3;WitPwamanifestShortcuts3,
--div--;LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.wit_pwamanifest_screenshots;WitPwamanifestName,--palette--;LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.wit_pwamanifest_screenshot_1;WitPwamanifestScreenshot1,--palette--;LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.wit_pwamanifest_screenshot_2;WitPwamanifestScreenshot2,--palette--;LLL:EXT:wit_pwamanifest/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.wit_pwamanifest_screenshot_3;WitPwamanifestScreenshot3,
--div--;LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.languages, languages,
--div--;LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.errorHandling, errorHandling,
--div--;LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.routes, routes';