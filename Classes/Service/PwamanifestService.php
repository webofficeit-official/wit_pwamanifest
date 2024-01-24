<?php

declare(strict_types=1);

namespace Woit\WitPwamanifest\Service;

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Http\ServerRequest;
use TYPO3\CMS\Core\Site\Entity\Site;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/***
 *
 * This file is part of the "wit_pwamanifest" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 *
 *  (c) 2024
 *
 ***/

/**
 * Settings service
 */
class PwamanifestService {
    public function manifestConfiguration() {
        $siteConfiguration = $this->getSite()->getConfiguration();
        $settings = [
            'short_name' => $siteConfiguration['WitPwamanifestShortName'] ?? '',
            'name' => $siteConfiguration['WitPwamanifestName'] ?? '',
            'icons' => [
                [
                    'src' => $siteConfiguration['WitPwamanifestSmallIconPath'] ?? '',
                    'type' => $siteConfiguration['WitPwamanifestSmallIconType'] ?? '',
                    'sizes' => $siteConfiguration['WitPwamanifestSmallIconSize'] ?? '',
                ],
                [
                    'src' => $siteConfiguration['WitPwamanifestBigIconPath'] ?? '',
                    'type' => $siteConfiguration['WitPwamanifestBigIconType'] ?? '',
                    'sizes' => $siteConfiguration['WitPwamanifestBigIconSize'] ?? '',
                ]
            ],
            'id' => $siteConfiguration['WitPwamanifestId'] ?? '',
            'start_url' => $siteConfiguration['WitPwamanifestStartUrl'] ?? '',
            'background_color' => $siteConfiguration['WitPwamanifestbackgroundColor'] ?? '',
            'display' => $siteConfiguration['WitPwamanifestDisplay'] ?? '',
            'scope' => $siteConfiguration['WitPwamanifestScope'] ?? '',
            'theme_color' => $siteConfiguration['WitPwamanifestThemeColor'] ?? '',
            'description' => $siteConfiguration['WitPwamanifestDescription'] ?? '',
            'shortcuts' => $this->getManifestShortcutsConfiguration($siteConfiguration),
            'screenshots' => $this->getManifestScreenshotsConfiguration($siteConfiguration),
        ];

        return json_encode($settings);
    }

    protected function getManifestShortcutsConfiguration(array $siteConfiguration): array
    {
        $contentObject = GeneralUtility::makeInstance(ContentObjectRenderer::class);
        $shortcuts = [];
        for ($i = 1; $i <= 3; $i++) {
            if (
                (($siteConfiguration["WitPwamanifestShortcuts{$i}Name"] ?? '') !== '' ||
                ($siteConfiguration["WitPwamanifestShortcuts{$i}ShortName"] ?? '') !== '') &&
                ($siteConfiguration["WitPwamanifestShortcuts{$i}Url"] ?? '') !== ''
            ) {
                $icons = [];
                $icons[] = \array_filter([
                    'src' => $siteConfiguration["WitPwamanifestShortcuts{$i}IconSrc"] ?? '',
                    'sizes' => $siteConfiguration["WitPwamanifestShortcuts{$i}IconSizes"] ?? ''
                ]);

                $shortcuts[] = \array_filter([
                    'name' => $siteConfiguration["WitPwamanifestShortcuts{$i}Name"] ?? '',
                    'short_name' => $siteConfiguration["WitPwamanifestShortcuts{$i}ShortName"] ?? '',
                    'description' => $siteConfiguration["WitPwamanifestShortcuts{$i}Description"] ?? '',
                    'url' => $contentObject->typoLink_URL(['parameter' => $siteConfiguration["WitPwamanifestShortcuts{$i}Url"] ?? '', 'forceAbsoluteUrl' => true]),
                    'icons' => $icons
                ]);
            }
        }

        return $shortcuts;
    }

    protected function getManifestScreenshotsConfiguration(array $siteConfiguration): array
    {
        $contentObject = GeneralUtility::makeInstance(ContentObjectRenderer::class);
        $screenshot = [];
        for ($i = 1; $i <= 3; $i++) {
            if (
                ($siteConfiguration["WitPwamanifestScreenshot{$i}Src"] ?? '') !== ''
            ) {                
                $screenshot[] = \array_filter([
                    'src' => $siteConfiguration["WitPwamanifestScreenshot{$i}Src"] ?? '',
                    'type' => $siteConfiguration["WitPwamanifestScreenshot{$i}Type"] ?? '',
                    'sizes' => $siteConfiguration["WitPwamanifestScreenshot{$i}Size"] ?? '',
                    'form_factor' => $siteConfiguration["WitPwamanifestScreenshot{$i}FormFactor"] ?? ''
                ]);
            }
        }

        return $screenshot;
    }

    /**
     * @return ExtensionConfiguration
     */
    protected function getExtensionConfiguration(): ExtensionConfiguration
    {
        return GeneralUtility::makeInstance(ExtensionConfiguration::class);
    }

    /**
     * @return ServerRequest
     */
    protected function getServerRequest(): ServerRequest
    {
        return $GLOBALS['TYPO3_REQUEST'];
    }

    /**
     * @return Site
     */
    protected function getSite(): Site
    {
        return $this->getServerRequest()->getAttribute('site');
    }
}