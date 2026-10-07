..  include:: /Includes.rst.txt

..  _configuration:

=============
Configuration
=============

All settings are stored in the site configuration
(:file:`config/sites/<your-site>/config.yaml`). Edit them in the backend module
:guilabel:`Sites > Setup` (TYPO3 v14). The extension adds four tabs:

*   :guilabel:`PWA Manifest` – basic data and icons
*   :guilabel:`PWA Manifest Shortcuts` – up to three shortcuts
*   :guilabel:`PWA Manifest Screenshots` – up to three screenshots
*   :guilabel:`PWA Offline / Service Worker` – see :ref:`offline-support`

Shortcuts and screenshots are provided as three fixed field groups each.

Empty fields are omitted from the manifest. If no field is filled, the
manifest is an empty JSON array (``[]``).

..  _configuration-basic:

Basic manifest data
===================

Tab :guilabel:`PWA Manifest`, palette :guilabel:`PWA Manifest name`.

..  figure:: /Images/Wit_PWAManifest.png
    :alt: Site configuration tab "PWA Manifest"
    :class: with-shadow

    Basic manifest data and icons

..  confval-menu::
    :name: site-basic
    :display: table
    :type:

..  confval:: WitPwamanifestShortName
    :name: site-short-name
    :type: string

    Label :guilabel:`Short Name`. Manifest member ``short_name``.

..  confval:: WitPwamanifestName
    :name: site-name
    :type: string

    Label :guilabel:`Name`. Manifest member ``name``.

..  confval:: WitPwamanifestStartUrl
    :name: site-start-url
    :type: string

    Label :guilabel:`Start Url`. Manifest member ``start_url``. Also used as offline fallback when no offline page is set.

..  confval:: WitPwamanifestScope
    :name: site-scope
    :type: string

    Label :guilabel:`Scope`. Manifest member ``scope``.

..  confval:: WitPwamanifestId
    :name: site-id
    :type: string

    Label :guilabel:`Id`. Manifest member ``id``.

..  confval:: WitPwamanifestDisplay
    :name: site-display
    :type: string

    Label :guilabel:`Display`. Manifest member ``display``. Allowed values: ``standalone``, ``fullscreen``, ``minimal-ui``, ``browser``.

..  confval:: WitPwamanifestbackgroundColor
    :name: site-background-color
    :type: string (color)

    Label :guilabel:`Background Color` (color picker). Manifest member ``background_color``.

..  confval:: WitPwamanifestThemeColor
    :name: site-theme-color
    :type: string (color)

    Label :guilabel:`Theme Color` (color picker). Manifest member ``theme_color``.

..  confval:: WitPwamanifestDescription
    :name: site-description
    :type: string

    Label :guilabel:`Description`. Manifest member ``description``.

..  _configuration-icons:

Icons
=====

Tab :guilabel:`PWA Manifest`, palette :guilabel:`PWA Manifest icons`. Both
icons are written to the manifest member ``icons``. An icon is only added if
its path is set.

..  confval-menu::
    :name: site-icons
    :display: table
    :type:

..  confval:: WitPwamanifestSmallIconPath
    :name: site-small-icon-path
    :type: string

    Label :guilabel:`Small icon path`. Icon ``src``, example: ``fileadmin/woit_pwamanifest/192x192.png``.

..  confval:: WitPwamanifestSmallIconType
    :name: site-small-icon-type
    :type: string

    Label :guilabel:`Small icon type`. Icon ``type``, example: ``image/png``.

..  confval:: WitPwamanifestSmallIconSize
    :name: site-small-icon-size
    :type: string

    Label :guilabel:`Small icon size`. Icon ``sizes``, example: ``192x192``.

..  confval:: WitPwamanifestBigIconPath
    :name: site-big-icon-path
    :type: string

    Label :guilabel:`Big icon path`. Icon ``src``, example: ``fileadmin/woit_pwamanifest/548x548.png``.

..  confval:: WitPwamanifestBigIconType
    :name: site-big-icon-type
    :type: string

    Label :guilabel:`Big icon type`. Icon ``type``, example: ``image/png``.

..  confval:: WitPwamanifestBigIconSize
    :name: site-big-icon-size
    :type: string

    Label :guilabel:`Big icon size`. Icon ``sizes``, example: ``548x548``.

..  _configuration-shortcuts:

Shortcuts
=========

Tab :guilabel:`PWA Manifest Shortcuts`, palettes
:guilabel:`PWA Manifest Shortcut 1` to :guilabel:`PWA Manifest Shortcut 3`.
Written to the manifest member ``shortcuts``.

..  figure:: /Images/Wit_PWAManifest_Shortcuts.png
    :alt: Site configuration tab "PWA Manifest Shortcuts"
    :class: with-shadow

    Shortcuts 1 and 2 (shortcut 3 has the same fields)

In the field names below, ``N`` stands for ``1``, ``2`` or ``3``.

A shortcut is only added to the manifest if :confval:`site-shortcut-url` is
set **and** at least one of :confval:`site-shortcut-name` or
:confval:`site-shortcut-short-name` is set.

..  confval-menu::
    :name: site-shortcuts
    :display: table
    :type:

..  confval:: WitPwamanifestShortcutsNName
    :name: site-shortcut-name
    :type: string

    Label :guilabel:`Name (required)`. Shortcut ``name``.

..  confval:: WitPwamanifestShortcutsNShortName
    :name: site-shortcut-short-name
    :type: string

    Label :guilabel:`Short name`. Shortcut ``short_name``.

..  confval:: WitPwamanifestShortcutsNDescription
    :name: site-shortcut-description
    :type: string

    Label :guilabel:`Description`. Shortcut ``description``.

..  confval:: WitPwamanifestShortcutsNUrl
    :name: site-shortcut-url
    :type: string (link)

    Label :guilabel:`URL (required)`. Link to a TYPO3 page or an external URL (link browser). Rendered as absolute URL into shortcut ``url``.

..  confval:: WitPwamanifestShortcutsNIconSrc
    :name: site-shortcut-icon-src
    :type: string

    Label :guilabel:`Icon source`. Shortcut icon ``src``, example: ``fileadmin/woit_pwamanifest/192x192.png``.

..  confval:: WitPwamanifestShortcutsNIconSizes
    :name: site-shortcut-icon-sizes
    :type: string

    Label :guilabel:`Icon sizes`. Shortcut icon ``sizes``, example: ``192x192``.

..  _configuration-screenshots:

Screenshots
===========

Tab :guilabel:`PWA Manifest Screenshots`, palettes
:guilabel:`PWA Manifest Screenshot 1` to :guilabel:`PWA Manifest Screenshot 3`.
Written to the manifest member ``screenshots``.

..  figure:: /Images/Wit_PWAManifest_Screenshots.png
    :alt: Site configuration tab "PWA Manifest Screenshots"
    :class: with-shadow

    Screenshot configuration

In the field names below, ``N`` stands for ``1``, ``2`` or ``3``.
A screenshot is only added to the manifest if
:confval:`site-screenshot-src` is set.

..  confval-menu::
    :name: site-screenshots
    :display: table
    :type:

..  confval:: WitPwamanifestScreenshotNSrc
    :name: site-screenshot-src
    :type: string

    Label :guilabel:`Screenshot source`. Screenshot ``src``.

..  confval:: WitPwamanifestScreenshotNType
    :name: site-screenshot-type
    :type: string

    Label :guilabel:`Screenshot type`. Screenshot ``type``, example: ``image/png``.

..  confval:: WitPwamanifestScreenshotNSize
    :name: site-screenshot-size
    :type: string

    Label :guilabel:`Screenshot size`. Screenshot ``sizes``, example: ``192x192``.

..  confval:: WitPwamanifestScreenshotNFormFactor
    :name: site-screenshot-form-factor
    :type: string

    Label :guilabel:`Form factor`. Screenshot ``form_factor``. Allowed values: ``wide``, ``narrow``.

..  _configuration-example:

Browser requirements
====================

Chrome DevTools reports the following when fields are missing:

*   Without a screenshot with :confval:`site-screenshot-form-factor` ``wide``,
    the richer install UI is not available on desktop.
*   Without a screenshot with form factor ``narrow`` (or none set), the richer
    install UI is not available on mobile.
*   At least one square icon is required. Paths must be reachable from the
    browser, see :ref:`troubleshooting`.

Example
=======

..  code-block:: yaml
    :caption: config/sites/<your-site>/config.yaml (excerpt)

    WitPwamanifestShortName: 'Example'
    WitPwamanifestName: 'Example Website'
    WitPwamanifestStartUrl: '/'
    WitPwamanifestScope: '/'
    WitPwamanifestDisplay: standalone
    WitPwamanifestbackgroundColor: '#ffffff'
    WitPwamanifestThemeColor: '#004a99'
    WitPwamanifestSmallIconPath: 'fileadmin/woit_pwamanifest/192x192.png'
    WitPwamanifestSmallIconType: 'image/png'
    WitPwamanifestSmallIconSize: '192x192'
    WitPwamanifestBigIconPath: 'fileadmin/woit_pwamanifest/548x548.png'
    WitPwamanifestBigIconType: 'image/png'
    WitPwamanifestBigIconSize: '548x548'
