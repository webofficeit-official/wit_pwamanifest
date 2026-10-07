..  include:: /Includes.rst.txt

..  _offline-support:

================================
Offline support / service worker
================================

Tab :guilabel:`PWA Offline / Service Worker` in the site configuration.

..  figure:: /Images/Wit_PWAManifest_ServiceWorker.png
    :alt: Site configuration tab "PWA Offline / Service Worker"
    :class: with-shadow

    Service worker and offline fallback page in the site configuration

..  confval-menu::
    :name: site-offline
    :display: table
    :type:

..  confval:: WitPwamanifestServiceWorkerEnabled
    :name: site-service-worker-enabled
    :type: boolean
    :default: false

    Label :guilabel:`Enable service worker / offline support`. If enabled, a
    script that registers the service worker is added to the
    :html:`<head>` of every page.

..  confval:: WitPwamanifestOfflinePageUrl
    :name: site-offline-page-url
    :type: string (link)

    Label :guilabel:`Offline fallback page`. Page shown when a page navigation
    fails because there is no network connection. If empty,
    :confval:`site-start-url` is used. If :confval:`site-start-url` is empty
    too, ``/`` is used.

..  _offline-support-behaviour:

Behaviour
=========

*   The script is delivered via :typoscript:`typeNum = 836` with the header
    ``Service-Worker-Allowed: /`` and registered with ``scope: '/'``. No route
    enhancer and no file in the document root are required.
*   **Install:** the offline fallback page is stored in the cache
    ``wit-pwa-offline-v2``.
*   **Activate:** all other caches of the origin are deleted.
*   **Page navigation:** network first. If the request fails, the cached
    offline fallback page is returned.
*   **Styles, scripts, fonts and images:** cache first. Successful responses
    are stored in the cache when they are requested for the first time.
    Assets requested before are served from the cache, also offline.
*   Requests other than ``GET`` and requests with a scheme other than
    ``http``/``https`` (for example from browser extensions) are not handled.
*   The scope ``/`` covers the whole origin, including the TYPO3 backend
    under :file:`/typo3/`. Backend styles, scripts, fonts and images are
    therefore stored in the cache as well.

..  important::

    The service worker is intentionally minimal: there is no configurable
    caching strategy and no cache versioning per deployment.

    Assets are cached by their full URL. TYPO3 adds the file modification time
    to asset URLs (for example :file:`backend.css?1791380894`), so a changed
    file gets a new URL and is loaded from the network. The entry for the old
    URL stays in the cache until the cache name changes in a new extension
    version.

..  _offline-support-disable:

Disable the service worker
==========================

Disabling the option only stops the registration on new page loads. A service
worker that is already installed in a browser stays active until it is
unregistered (for example via the browser developer tools).
