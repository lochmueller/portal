<?php

# Backend configuration
if ($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'] === '') {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'] = 'EXT:portal/Resources/Public/Icons/ExtensionBig.svg';
}

if ($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'] === '') {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'] = 'EXT:portal/Resources/Public/Icons/Extension.svg';
}

if ($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginBackgroundImage'] === '') {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginBackgroundImage'] = 'EXT:portal/Resources/Public/Images/Login.jpg';
}

if ($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginFootnote'] === '') {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginFootnote'] = 'From EXT:portal with ❤️';
}

if ($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginHighlightColor'] === '') {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginHighlightColor'] = '#2a9d8f';
}

if ((string)$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] === 'New TYPO3 site') {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'EXT:portal';
}


