<?php

declare(strict_types=1);

namespace Woit\WitPwamanifest\Service;

use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Core\Attribute\AsAllowedCallable;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
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
    #[AsAllowedCallable]
    public function manifestConfiguration(): string
    {
        $siteConfiguration = $this->getSite()->getConfiguration();
        $settings = array_filter([
            'short_name' => $siteConfiguration['WitPwamanifestShortName'] ?? '',
            'name' => $siteConfiguration['WitPwamanifestName'] ?? '',
            'icons' => $this->getManifestIconsConfiguration($siteConfiguration),
            'id' => $siteConfiguration['WitPwamanifestId'] ?? '',
            'start_url' => $siteConfiguration['WitPwamanifestStartUrl'] ?? '',
            'background_color' => $siteConfiguration['WitPwamanifestbackgroundColor'] ?? '',
            'display' => $siteConfiguration['WitPwamanifestDisplay'] ?? '',
            'scope' => $siteConfiguration['WitPwamanifestScope'] ?? '',
            'theme_color' => $siteConfiguration['WitPwamanifestThemeColor'] ?? '',
            'description' => $siteConfiguration['WitPwamanifestDescription'] ?? '',
            'shortcuts' => $this->getManifestShortcutsConfiguration($siteConfiguration),
            'screenshots' => $this->getManifestScreenshotsConfiguration($siteConfiguration),
        ], static fn ($value): bool => $value !== '' && $value !== []);

        return json_encode($settings, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES);
    }

    protected function getManifestIconsConfiguration(array $siteConfiguration): array
    {
        $icons = [];
        $icons[] = array_filter([
            'src' => $siteConfiguration['WitPwamanifestSmallIconPath'] ?? '',
            'type' => $siteConfiguration['WitPwamanifestSmallIconType'] ?? '',
            'sizes' => $siteConfiguration['WitPwamanifestSmallIconSize'] ?? '',
        ]);
        $icons[] = array_filter([
            'src' => $siteConfiguration['WitPwamanifestBigIconPath'] ?? '',
            'type' => $siteConfiguration['WitPwamanifestBigIconType'] ?? '',
            'sizes' => $siteConfiguration['WitPwamanifestBigIconSize'] ?? '',
        ]);

        return array_values(array_filter($icons, static fn (array $icon): bool => ($icon['src'] ?? '') !== ''));
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
                $icon = \array_filter([
                    'src' => $siteConfiguration["WitPwamanifestShortcuts{$i}IconSrc"] ?? '',
                    'sizes' => $siteConfiguration["WitPwamanifestShortcuts{$i}IconSizes"] ?? ''
                ]);
                $icons = ($icon['src'] ?? '') !== '' ? [$icon] : [];

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
     * TYPO3's classic USER cObject does not receive the PSR-7 request as an
     * argument, so the request is read from the global set up by the
     * frontend request handler - this is the TYPO3-sanctioned way to reach
     * it outside of DI-aware contexts.
     */
    protected function getServerRequest(): ServerRequestInterface
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