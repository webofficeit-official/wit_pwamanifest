..  include:: /Includes.rst.txt

..  _troubleshooting:

===============
Troubleshooting
===============

..  _troubleshooting-type-835:

"No page configured for type=835."
==================================

The TypoScript of the extension is not loaded. Either the site set is not
added to the site, or a :typoscript:`sys_template` record with the flag
:guilabel:`Clear` > :guilabel:`Setup` removes it. Include the static template, see
:ref:`installation-static-template`.

..  _troubleshooting-other-manifest:

The browser shows values or errors of another manifest
======================================================

The page contains more than one :html:`<link rel="manifest">` tag, for
example one from the site package. The browser does not use the manifest of
this extension. Remove the other manifest link from your templates and check
the HTML source of the page:

..  code-block:: html

    <link rel="manifest" href="https://example.org/?type=835">

..  _troubleshooting-icon:

"Icon … failed to load"
=======================

The icon path in the site configuration is not reachable. Open the path in the
browser; it must return the image (HTTP 200). Use a path below
:file:`fileadmin/` or the public :file:`_assets/` path of your site package.

..  _troubleshooting-cache-put:

"Failed to execute 'put' on 'Cache': Request scheme 'chrome-extension' is unsupported"
======================================================================================

The service worker of an older version tried to cache requests of browser
extensions. The current service worker ignores requests with a scheme other
than ``http``/``https``. Update the extension and load the page again; the
browser then installs the changed service worker.

..  _troubleshooting-check:

Check the result
================

*   Manifest: open ``https://example.org/?type=835``.
*   Chrome DevTools show the used manifest, its errors and the registered
    service worker.
