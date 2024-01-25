<?php

defined('TYPO3') or die();

call_user_func(static function () {
    /**
     * Default TypoScript for Manifest
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'wit_pwamanifest',
        'Configuration/TypoScript',
        'WIT PWA Manifest'
    );
});