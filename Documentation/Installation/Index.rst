..  include:: /Includes.rst.txt

..  _installation:

============
Installation
============

..  _installation-composer:

Install with Composer
=====================

..  code-block:: bash

    composer require woit/wit-pwamanifest

..  _installation-site-set:

Add the site set
================

The extension provides the site set ``woit/wit-pwamanifest``
(:file:`Configuration/Sets/WitPwamanifest/`). It contains the manifest and
service worker endpoints and the :html:`<link rel="manifest">` tag.

Add the set as dependency to the site configuration, either in the backend
(TYPO3 v14: module :guilabel:`Sites > Setup`, tab :guilabel:`General`, field
:guilabel:`Sets for this Site`) or directly in the :file:`config.yaml` of your
site:

..  code-block:: yaml
    :caption: config/sites/<your-site>/config.yaml

    dependencies:
      - woit/wit-pwamanifest

..  _installation-static-template:

Alternative: TypoScript record
==============================

If a :typoscript:`sys_template` record of the site has the flag
:guilabel:`Clear` > :guilabel:`Setup` checked (tab :guilabel:`Advanced Options`), it removes the setup TypoScript
of the site set, including the endpoints of this extension. Include the static
TypoScript template :guilabel:`WIT PWA Manifest (wit_pwamanifest)` in this record
instead (module :guilabel:`TypoScript` >
:guilabel:`Edit TypoScript Record` > :guilabel:`Advanced Options` >
:guilabel:`Include TypoScript sets`).

Symptom when the TypoScript is missing: calling ``?type=835`` returns the error
``No page configured for type=835.``

..  _installation-next:

Next steps
==========

Fill in the PWA fields in the site configuration, see :ref:`configuration`.
