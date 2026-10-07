..  include:: /Includes.rst.txt

..  _introduction:

============
Introduction
============

..  _what-it-does:

What does it do?
================

The extension :composer:`woit/wit-pwamanifest` lets integrators manage the
data of a `Web App Manifest <https://developer.mozilla.org/en-US/docs/Web/Manifest>`__
directly in the TYPO3 site configuration. Based on this data it:

*   delivers the manifest as JSON (:typoscript:`typeNum = 835`),
*   adds a :html:`<link rel="manifest">` tag to the :html:`<head>` of every
    page rendered by the TypoScript object :typoscript:`page`,
*   optionally registers a minimal service worker with an offline fallback
    page (:typoscript:`typeNum = 836`), see :ref:`offline-support`.

The following manifest members can be configured:

*   ``short_name``, ``name``, ``id``, ``start_url``, ``scope``, ``display``,
    ``background_color``, ``theme_color``, ``description``
*   ``icons`` (one small and one big icon)
*   ``shortcuts`` (up to three)
*   ``screenshots`` (up to three)

..  _compatibility:

Compatibility
=============

..  csv-table::
    :header: "Extension version", "TYPO3", "PHP"

    "1.2.x", "13.4 – 14.x", "No own constraint"

..  _screenshots:

Screenshot
==========

..  figure:: /Images/Wit_PWAManifest.png
    :alt: Site configuration tab "PWA Manifest"
    :class: with-shadow

    Basic manifest data and icons in the site configuration

More screenshots are shown in :ref:`configuration` and :ref:`offline-support`.
