# EXT:portal

> Easy to use portal framework with many best practices.

## Integrations

### Base 

Core (included):
- EXT:felogin (for login process)
- EXT:reactions & EXT:webhooks (for webhook on different user actions)
- EXT:form (for form processes)
- EXT:backend (access all records with regular TYPO3 core functions and usage hte backend user access management)

Third party (included):
- EXT:bootstrap_package (for base styling and theming)
- EXT:container (for flexible grid system on pages)
- EXT:language_detection (for language detection and handling)
- EXT:news (for news handling)
- EXT:tt_address (for contact database)
- EXT:ke_search (for search on fe-group specific data)

### Installation

The extension is only available in composer mode, because it is much more flexible, if third party libs have to be included. This example install the portal locally with docker/lando virtualization:

1. Create the composer based TYPO3 project `composer create-project typo3/cms-base-distribution:"^12.4" portal`
2. Switch to new folder `cd portal`
3. Install the EXT:portal incl. dependencies `composer require lochmueller/portal`
4. Copy Lando base file `cp packages/portal/Resources/Private/Build/Lando/.lando.yml .`
5. Start lando virtualization `lando start`
6. Import base DB `lando typo3 impexp:import --force-uid --enable-log /app/vendor/lochmueller/portal/Initialisation/data.xml`
7. Copy site configuration `mkdir -p config/sites/portal && cp vendor/lochmueller/portal/Initialisation/Site/Portal/config.yaml config/sites/portal/config.yaml`
8. Create a "Local_Admin1" admin user (password is "Local_Admin1") `lando typo3:createLocalAdmin`
9. Call https://portal.lndo.site/ & https://portal.lndo.site/typo3/

## Credits

Login image:
- https://www.pexels.com/photo/beautiful-view-of-moraine-lake-2662116/


## DEV Create new export file

Export: `lando typo3 impexp:export --levels=99 --table=_ALL --record=_ALL --title="EXT:portal Export" data`

Import: `lando typo3 impexp:import --force-uid --enable-log /app/vendor/lochmueller/portal/Initialisation/data.xml`

## Ideas

- EXT:sf_register (For Registration and edit profile functions)
- EXT:fal_protect (for restrict access to FAL resources)
- EXT:calendarize (Events)
- EXT:news (News)
- EXT:form (Custom Form processes)
- Core Events EXT:reactions
- Add reactions
- Add webhooks
- Theme ideas: https://startbootstrap.com/previews/sb-admin-2
- composer require tpwd/ke_search
- EXT:form registration
- Kickstart Prozess (Wizard)
- EXT:oauth2_client

- https://undraw.co/