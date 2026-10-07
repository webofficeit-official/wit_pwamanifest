..  include:: /Includes.rst.txt

..  _typoscript:

==========
TypoScript
==========

The site set and the static template register the following page types and
header data. All endpoints are rendered by
:php:`\Woit\WitPwamanifest\Service\PwamanifestService`.

..  csv-table::
    :header: "TypoScript object", "typeNum / key", "Content-Type", "Method"

    ":typoscript:`manifest`", "835", "``application/manifest+json``", ":php:`manifestConfiguration()`"
    ":typoscript:`serviceWorker`", "836", "``application/javascript``", ":php:`serviceWorkerScript()`"
    ":typoscript:`page.headerData.999999`", "–", "–", "Renders :html:`<link rel=""manifest"">`"
    ":typoscript:`page.headerData.999998`", "–", "–", ":php:`serviceWorkerRegistration()`"

The service worker response additionally sends the header
``Service-Worker-Allowed: /``.

..  note::

    The service worker URL is built in PHP with the fixed parameter
    ``&type=836``. If another extension or your site package already uses
    :typoscript:`typeNum` 835 or 836, change the conflicting type there.

..  _typoscript-urls:

Resulting URLs
==============

..  code-block:: text

    https://example.org/?type=835   Manifest
    https://example.org/?type=836   Service worker script

The manifest link always points to the current page with ``type=835``.
